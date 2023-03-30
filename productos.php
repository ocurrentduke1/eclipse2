<?php

include 'com.php';

$Tipo = $_POST["Tipo"];
$nombre = $_POST["nombre"];
$Precio = $_POST["Precio"];
$Stock = $_POST["Stock"];
$imagen = $_POST["imagen"];


$inser = "INSERT INTO productos (id, Tipo, nombre, Precio, Stock, imagen)
values ('0', '$Tipo', '$nombre', '$Precio', '$Stock', '$imagen')";

$set_inser = mysqli_query($con, $inser);

if($set_inser){
    header('location: principal_admin.php');
}

mysqli_close($connect);

?>