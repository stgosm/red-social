<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./styles/style_subir_foto.css">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="subir_foto1.php" id="foto" name="foto" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="item" id="descripcion">
                <p>
                    Descripción:
                </p>
                <input type="text" id="txtDescripcion" name="txtDescripcion">
            </div>
            <div class="item" id="archivo">
                <p>
                    Archivo
                </p>
                <input type="file" id="txtSubir" name="txtSubir">  
            </div>
            <div class="item">
                <button type="submit" id="btnSubir" value="subir">
                    Subir
                </button>
            </div>
        </div>  
    </form>
</body>
</html>