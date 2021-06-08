
<?php
    require $_SERVER['DOCUMENT_ROOT'] .'/lib/app.php'; 

    $stm = $dbConnexion->query('SELECT * FROM employees;');

    $people = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>'; var_dump($people); echo '<pre>'; die();
?>



<?php
    require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) && in_array($_GET['format'], ['json', 'xml']) ? $_GET['format'] : 'html').'.php';