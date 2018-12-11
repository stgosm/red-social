<?php
$nombre = $_POST["txtNombre"];
session_start();
$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");
//$sql = "UPDATE tblUsuario SET usu_nombre = '".$nombre."' WHERE usu_correo ='".$_SESSION["correo"]."'";
$sql = "UPDATE tblUsuario SET usu_nombre = '$nombre' WHERE usu_correo = '".$_SESSION["correo"]."'";
$sql1 = "UPDATE tblPublicacion SET pub_usuario = '$nombre' WHERE pub_usu_id = '".$_SESSION["usuarioID"]."'";
$res = mysqli_query($conexion, $sql);
$res1 = mysqli_query($conexion, $sql1);
if ($res == TRUE && $res1 == TRUE) {
    header("Location:principal.php");
}
mysqli_close();
?>