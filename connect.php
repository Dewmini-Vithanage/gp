<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "koratuwa_dairy_farm";   //database name

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	
}