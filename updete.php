<?php

include("com.php");

$id = $_POST["ID"];
$Tipo = $_POST["Tipo"];
$nombre = $_POST["nombre"];
$Precio = $_POST["Precio"];
$Stock = $_POST["Stock"];
$imagen = $_POST["imagen"];

$sql="UPDATE productos SET Tipo='$Tipo', nombre='$nombre', Precio='$Precio', Stock='$Stock', imagen='$imagen' WHERE id='$id'";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: principal_admin.php");
    }
?>