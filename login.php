<?php

include 'com.php';

$nusuario = $_POST["nusuario"];
$contrasena = $_POST["contrasena"];

$consulta = mysqli_query($con, "SELECT * FROM registro WHERE nusuario = '$nusuario' && contrasena = '$contrasena'");

$filas = mysqli_fetch_array($consulta);

if($nusuario == "admin" && $contrasena == 'BMX2022'){
    session_start();
    $_SESSION['nusuario']= $nusuario;
    header('location: principal_admin.php');
}else 
if($nusuario == "almacen" && $contrasena == 'BMX2022'){
    session_start();
    $_SESSION['nusuario']= $nusuario;
    header('location: almacen.php');
}else 
if($filas){
    session_start();
    $_SESSION['nusuario'] = $nusuario;
    header('location: eclipse.php');
}else{
    header('location: inicio_sesion.html');
    echo '<h3>error de autenticacion</3>';
}

mysqli_close($connect);

?>