console.log("welcome to real world");

const deleteButtons = document.getElementsByClassName("employees-delete-button");

Array.from(deleteButtons).forEach(element => {
    element.addEventListener('click',() =>{
        let person = JSON.parse(element.dataset.person)
        
        if(window.confirm('estas seguro que deseas eliminar a '+ person.name +'?')) {
            fetch('/employees_delete.php', {
                method: 'DELETE', 
                body: element.dataset.person
            })
            .then(response => response.json())
            .then(data => {
               if(data.status === 'success'){
                   window.location.replace('/employees.php?message=' + encodeURIComponent(data.message))
               }else {
                   alert(data.message);
               }
            })
        }    
    });
});