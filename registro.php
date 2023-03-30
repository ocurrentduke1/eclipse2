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
    echo '<h3> te has registrado</h3>';
    header('location:inicio_sesion.html');
}else{
    header('location: registro_cuenta.html');
    echo '<h3>Error en el registrode usuario</h3>';
}

mysqli_close($connect);

?>