<?php
session_start();
if(!isset($_SESSION["correo"]))
{
	header("location:index.html");
}
$correo=$_SESSION["correo"];
$temporal = $_FILES["FotoPerfil"]["tmp_name"];
$archivo = $_SESSION["correo"].".jpg";
move_uploaded_file($temporal,"images_user/".$archivo);
header("Location:principal.php");	
?>