<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="base_eclipse";

$con = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$con){
    die("Error" . mysqli_connect_error());
}

?>