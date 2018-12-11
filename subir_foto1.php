<?php
$descripcion = $_POST["txtDescripcion"];
$temporal = $_FILES["txtSubir"]["tmp_name"];
$archivo = $_FILES["txtSubir"]["name"];
move_uploaded_file($temporal,"images_data/".$archivo);
//Conexión base de datos
session_start();
$conexion = mysqli_connect("localhost","root","","red_social");
mysqli_select_db($conexion,"red_social");
$sql = "INSERT INTO tblImagenes VALUES(NULL, '".$_SESSION["nombre"]."', '$archivo', '$descripcion')";
$res = mysqli_query($conexion, $sql);

if ($res == TRUE) {
    move_uploaded_file($temporal,"images_data/".$archivo);
    header("Location:principal.php");
}
mysqli_close();
?>