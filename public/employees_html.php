
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "assets/head.php";
        
    ?>
</head>
<body>
    
    <?php
        include("./enlaces.php")
    ?>

    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>city</td>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($people as $person) {?>
            <tr>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['id']?></a></td>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['name']?></a></td>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['email']?></a></td>
                <td><?php echo $person['city'];?></td>
            </tr>
           <?php } ?>
        </tbody>    
    </table>

    <?php if(isset($_GET["message"])): ?>
        <p><?= $_GET["message"] ?></p>
    <?php endif; ?>
    <hr/>
    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" />
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>


    <?php
        include "./assets/footer.php";
     ?> 
</body>
</html>