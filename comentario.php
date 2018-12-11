<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["correo"]))
{
	header("location:index.html");
}
?>
<head>
	<meta charset="UTF-8">
	<meta  http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<form id="Comentario" name="Comentario" method="POST" action="comentario1.php">
			<label>Comentario</label>
			<input type="text" placeholder="Comentario" name="txtComentario" id="txtComentario" >
			<input type="submit" id="Enviar"  value="Enviar">
			<input type='hidden' id='id_pub' name='id_pub' value="<php echo $row['pub_id'];?>">
		</form>
		
	</div>
	
	

</form>
</body>
</html>