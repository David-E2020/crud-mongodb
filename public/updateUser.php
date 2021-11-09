<?php
require '../app/config.php';
if(isset($_POST['submit'])){
    $fecha=date("Y-m-d H:i:s");
    $collection2->updateOne(
        ['_id' => new MongoDB\BSON\ObjectID($_POST['id'])],
        ['$set' => [
            'nombre' => $_POST['nombre'],
            'cuenta' => $_POST['usuario'],
            'password' => md5($_POST['pass1']),
            'nivel' => $_POST['nivel'],
            'fecha_actualizacion' => $fecha
        ]]
    );

    header("Location: usuarios.php ");
}
?>