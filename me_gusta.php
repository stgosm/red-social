<?php 
session_start();
$correo = $_SESSION["correo"];
$id_mg = $_POST["id_pub"];
$fecha = date("Y-m-d H:i");
$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");
$SQL="INSERT INTO tblMeGusta values(null,'$correo','$fecha','$id_mg')";
$res = mysqli_query($conexion,$SQL);
if($res==false)
{
	echo "error";
	echo $SQL;
	die();
}
mysqli_close($conexion);
header("location:principal.php");
?>