<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style_cambiar_nombre.css">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="cambiar_nombre1.php" id="ingreso" name="ingreso" method="POST">
        <div class="container">
            <div class="item">
                <p>
                    Nombre nuevo:
                </p>
            </div>
            <div class="item">
                <input type="text" id="txtNombre" name="txtNombre" placeholder="<?php echo $_SESSION["nombreActualizado"];?>">
            </div>
            <div class="item">
                <button type="submit" id="btnActualizar" >
                    Actualizar
                </button>
            </div>
        </div>  
    </form>
</body>
</html>