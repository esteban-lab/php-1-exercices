<?php

require 'employees_'.(isset($_GET['format'])? $_GET['format'] :  'html').'.php';
$people = [
      ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
      ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
      ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
      ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
    ]; 

?>

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
                <td>name</td>
                <td>email</td>
                <td>age</td>
                <td>city</td>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($people as $person) {?>
            <tr>
                <td><?php echo $person['name'];?></td>
                <td><?php echo $person['email'];?></td>
                <td><?php echo $person['age'];?></td>
                <td><?php echo $person['city'];?></td>
            </tr>
           <?php } ?>
        </tbody>    
    </table>
    <?php
        include "./assets/footer.php";
     ?> 
</body>
</html>