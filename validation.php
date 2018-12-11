<?php
$correo = $_POST["txtCorreo"];
$contrasena = $_POST["txtContrasena"];

//Conexión base de datos
$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");
//$sql = "SELECT usu_correo as correo FROM tblUsuario WHERE usu_correo ='".$correo."'";
$sql = "SELECT * FROM tblUsuario WHERE usu_correo ='".$correo."'";
$res = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($res);
$correoBD = $row["usu_correo"];
if($correoBD != $correo){
    echo("No existe correo.");
    die();
}
$sql1 = "SELECT usu_password FROM tblUsuario WHERE usu_correo ='".$correo."'";
$res2 = mysqli_query($conexion, $sql1);
$registro = mysqli_fetch_assoc($res2);
$contrasenaBD = $registro["usu_password"];
if($contrasenaBD != md5($contrasena)){
    echo "La contraseña no es correcta";
    header("Location:index.html");
    die();
}

//$sql = "SELECT usu_nombre as nombreUsuario FROM tblUsuario WHERE usu_correo ='".$correo."'";
//$res3 = mysqli_query($conexion, $sql);
//$solicitar = mysqli_fetch_assoc($res);

session_start();
$_SESSION["correo"] = $correo;
$_SESSION["nombre"] = $row["usu_nombre"];
$_SESSION["usuarioID"] = $row["usu_id"];
header("Location:principal.php");
mysqli_close();
?>