<?php

require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$query = 'INSERT INTO `employees` (`name`, `email`, `age`, `city`) VALUES (:nombre, :correo, :edad, :ciudad);';

$stm = $dbConnexion->prepare($query);

$stm->bindParam(':nombre', $_POST['name']);
$stm->bindParam(':correo', $_POST['email']);
$stm->bindParam(':edad', $_POST['age']);
$stm->bindParam(':ciudad', $_POST['city']);

$stm->execute();

header('Location: /employees.php?message=' . urlencode('El usuario '.$_POST['email'].' se ha añadido correctamente.'));
