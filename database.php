<?php

$dbhost = "PMYSQL150.dns-servicio.com:3306";
$dbuser = "root2";
$dbpass = "Starlord2754_";
$dbname = "8753996_lofi";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["username"];
$pass = $_POST["password"];

$query = mysqli_query($conn,"SELECT * FROM Users WHERE username = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: /Web.html");
}
else if ($nr == 0) 
{
	echo "Password o Username Incorrecto";
}
?>
