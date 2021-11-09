<?php
require '../app/config.php';
if(isset($_POST['submit'])){
    $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($_POST['id'])],
        ['$set' => [
            'nombre' => $_POST['nombre'],
            'curso' => $_POST['curso'],
            'nota' => $_POST['nota']
        ]]
    );

    header("Location: index.php ");
}
?>