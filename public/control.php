<?php
//include("bd/coneccion.php");
require '../app/config.php';

$us=$_POST['usuario'];
$pw=md5($_POST['pass1']);

$usuarios = $collection2->findOne(["cuenta" => ($us),"password" => ($pw)]);
if($usuarios!=null){
    session_start();
    $_SESSION['ingreso']='si';
    $_SESSION['id_empleado']=$usuarios->_id;
    $_SESSION['nombre']=$usuarios->nombre;
    $_SESSION['nivel']=$usuarios->nivel;
    header("location:index.php");
}else{
    header("location: ../index.php");
}

?>