<?php

include("com.php");

$ID= $_GET['ID'];

$sql="DELETE FROM registro WHERE id ='$ID'";
$query=mysqli_query($con,$sql);

    if($query){
        header("Location: principal_admin.php");
    }
?>