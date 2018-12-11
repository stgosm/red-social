<?php
session_start();

$nombre = $_SESSION["nombre"];
$noticia = $_POST["txtNoticia"];
$fechaPublicacion = date("Y-m-d H:i");

//Conexión base de datos
$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");



$sql = "INSERT INTO tblPublicacion VALUES( NULL, '$nombre', '$noticia', '$fechaPublicacion', ".$_SESSION["usuarioID"].")";
$res = mysqli_query($conexion, $sql);
mysqli_close($conexion);

header("Location:principal.php");

?>