<?php
require '../app/config.php';
if(isset($_POST['submit'])){
    $fecha=date("Y-m-d H:i:s");
    $insertOneResult = $collection2->insertOne([
        'nombre' => $_POST['nombre'],
        'cuenta' => $_POST['usuario'],
        'password' => md5($_POST['pass1']),
        'nivel' => $_POST['nivel'],
        'fecha_creacion' => $fecha,
        'fecha_actualizacion' => $fecha
    ]);

    header("Location: usuarios.php ");
}
?>