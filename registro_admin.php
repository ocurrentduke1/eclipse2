<?php

include 'com.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nusuario = $_POST["nusuario"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];

$inser = "INSERT INTO registro (id, nombre, apellido, nusuario, contrasena, correo, celular)
values ('0', '$nombre', '$apellido', '$nusuario', '$contrasena', '$correo', '$celular')";

$set_inser = mysqli_query($con, $inser);

if($set_inser){
    header('location: principal_admin.php');
}

mysqli_close($connect);

?>