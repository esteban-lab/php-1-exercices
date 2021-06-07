<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <title>PHP Exercice</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php require "assets/head.php";?>

</head>

<body>
    
    <?php
        include("./enlaces.php");
        
    ?>

    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>
    
    <h1>Hola, <?= $_GET ['name'];?></h1>



    <p>Hoy es <strong><?php echo $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>

     <?php
        include "/assets/footer.php";
     ?>   
</body>

</html>