<?php

include("com.php");

$id = $_POST["ID"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$nusuario = $_POST["nusuario"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];

$sql="UPDATE registro SET nombre='$nombre', apellido='$apellido', nusuario='$nusuario', contrasena='$contrasena', correo='$correo', celular='$celular' WHERE id='$id'";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: principal_admin.php");
    }
?>