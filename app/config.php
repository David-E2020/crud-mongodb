<?php
require '../vendor/autoload.php';
$collection = (new MongoDB\Client)->prueba->estudiantes;
$collection2 = (new MongoDB\Client)->prueba->usuarios;
?>