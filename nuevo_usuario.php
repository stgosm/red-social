<?php
$correo = $_POST["txtCorreo"];
$contrasena = $_POST["txtContrasena"];
$confirmacion = $_POST["txtConfirmar"];
$nombre = $_POST["txtNombre"];

if($contrasena != $confirmacion){
    echo "Las contraseñas no coinciden.";
    die();
}
$conexion = mysqli_connect("localhost","root","","red_social");
$sql="INSERT INTO tblUsuario VALUES(NULL, '$correo', md5('$contrasena'), '$nombre')";

$res = mysqli_query($conexion, $sql);
if($res == false){
    echo "Algo salio mal.";
    die();
}
header("Location:index.html");
?>