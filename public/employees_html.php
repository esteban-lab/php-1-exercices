
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
    <?php if(isset($_GET["message"])): ?>
        <p><?= $_GET["message"] ?></p>
    <?php endif; ?>
    <?php
        include("./enlaces.php")
    ?>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>city</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($people as $person) {?>
            <tr>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['id']?></a></td>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['name']?></a></td>
                <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['email']?></a></td>
                <td><?php echo $person['city'];?></td>
                <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>' >Eliminar</button></td>
            </tr>
           <?php } ?>
        </tbody>    
    </table>

  
    <hr/>

        <?php
            if (isset($_GET['id'])) {
                $query = 'SELECT * FROM employees WHERE id = :identifiador';
                $stm = $dbConnexion->prepare($query);
                $stm->bindParam(':identifiador', $_GET['id']);
                $stm->execute();
                $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);

                } elseif (isset($_GET['email'])) {
                $query = 'SELECT * FROM employees WHERE email = :correo';
                $stm = $dbConnexion->prepare($query);
                $stm->bindParam(':correo', $_GET['email']);
                $stm->execute();
                $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
                }
        ?>

                <?php
                    $action = isset($currentPerson) ? '/employees_edit.php' : '/employees_add.php';
                ?>



        <form method="POST" action="<?=$action; ?>" enctype="multipart/form-data">
            <?php if(isset($currentPerson)): ?>
            <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']; ?>"/>
            <?php endif; ?>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="<?= $currentPerson['name']; ?>" required/>
            <br/>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= $currentPerson['email']; ?>" required/>
            <br/>
            <label for="age">Edad</label>
            <input type="number" id="age" name="age" value="<?= $currentPerson['age']; ?>" required/>
            <br/>
            <label for="city">Ciudad</label>
            <input type="text" id="city" name="city" value="<?= $currentPerson['city']; ?>" />
            <br/>
            <label for="archivo">Archivo</label>
            <input type="file" id="archivo" name="archivo" />
            <hr/>
            <input type="submit" value="Enviar"/>
        </form


    <?php
        include "./assets/footer.php";
     ?> 
    </body>
</html>


