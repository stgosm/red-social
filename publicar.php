<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["correo"])){
    header("location:index.html");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style_publicacion.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="guardar_publicacion.php" id="ingreso" name="ingreso" method="POST">
        <div class="container">
            <div class="item">
                <p>
                    Noticia:
                </p>
            </div>
            <div class="item">
                <input type="text" id="txtNoticia" name="txtNoticia">
            </div>
            <div class="item">
                <button type="submit" id=btnRegistrar>
                    Publicar
                </button>
            </div>
        </div>
    </form>
</body>
</html>
