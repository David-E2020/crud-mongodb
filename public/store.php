<?php
require '../app/config.php';
if(isset($_POST['submit'])){
    $insertOneResult = $collection->insertOne([
        'nombre' => $_POST['nombre'],
        'curso' => $_POST['curso'],
        'nota' => $_POST['nota']
    ]);

    header("Location: index.php ");
}
?>