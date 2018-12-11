<?php 
session_start();

$nombre = $_SESSION["nombre"];
$id_mg = $_POST["id_pub"];
$comentario = $_POST["txtComentario"];
$fecha = date("Y-m-d H:i");

$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");
$sql="INSERT INTO tblComentarioFoto VALUES(NULL,'$id_mg','$fecha','$comentario','$nombre')";

$res = mysqli_query($conexion,$sql);
if($res==false)
{
	echo "error";
	echo $sql;
	die();
}
mysqli_close($conexion);
header("location:principal.php");
?>