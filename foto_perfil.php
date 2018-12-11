<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta  http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<form id="Foto" name="Foto" method="POST" action="foto_perfil1.php" enctype="multipart/form-data">
			<input type="File" name="FotoPerfil" placeholder="Seleccione Archivo" id="FotoPerfil" class="form-control">
			<center><input type="submit" id="Subir" class="btn" value="Subir"></center>
		</form>
	</div>
</body>
</html>