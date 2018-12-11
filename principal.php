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
    <link rel="stylesheet" href="./styles/style_principal.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="grid-container">
            <div class="grid-item" id="logo">
                <img src="./images/terminal.png" width="40px" height="40px">
            </div>
            <div class="grid-item" id="title">
                <p>
                    FLOARUM 
                </p>
            </div>
            <div class="grid-item" id="welcome">
                <p>
                    Bienvenido,
                    <?php
                        //Puse la consulta aqui, porque no se si se pueda traer la consulta por SESSION.
                        //echo $_SESSION["nombre"];
                        $conexion = mysqli_connect("localhost","root","","red_social");
                        mysqli_select_db($conexion,"red_social");
                        $sql = "SELECT * FROM tblUsuario WHERE usu_correo ='".$_SESSION["correo"]."'";
                        $res = mysqli_query($conexion, $sql);
                        $row = mysqli_fetch_assoc($res);
                        echo $row["usu_nombre"];
                        $_SESSION["nombreActualizado"] = $row["usu_nombre"];
                        mysqli_close($conexion);
                    ?>
                </p>
            </div>
        </div>
        
    </header>
    <section>
        <table>
            <tr>
                <td width="20%" class="opciones">

                        <?php
                        echo "<div class='images_usuario'>";
                        echo '<img src="images_user/'.$_SESSION["correo"].".jpg".'"/>';
                        echo "</div>";
                        ?>

                        <a href="publicar.php">
                            Publicar
                        </a>
                        <br/>
                        <a href="cambiar_nombre.php">
                        Cambiar Nombre
                        </a>
                        <br/>
                        <a href="subir_foto.php">
                        Subir Fotos
                        </a>
                        <br/>
                        <a href="cerrar_sesion.php">
                        Cerrar Sesión
                        </a>
                        <br/>
                        <a href="foto_perfil.php">
                        Subir Foto de Perfil
                        </a>
                </td>
                <td width="70%">
                    <div class="mensaje">
                        <?php
                        //Conexión base de datos
                            //Publicacion
                            $conexion = mysqli_connect("localhost","root","","red_social");
                            mysqli_select_db($conexion,"red_social"); 
                            $sql = "SELECT * FROM tblPublicacion";
                            $res = mysqli_query($conexion, $sql);
                            while($row=mysqli_fetch_assoc($res)){
                                //Contenido de publicacion
                                echo "<div class='publicacion'>";

                                echo "<div class='pubUsuario'>";
                                echo $row["pub_usuario"];
                                echo "</div>";

                                echo "<div class='pubNoticia'>";
                                echo $row["pub_noticia"];
                                echo "</div>";
                                

                                echo "<div class='pubFecha'>";

                                echo "<div class='pubLike'>";
                                $SQL1 = "SELECT COUNT(*) FROM tblMeGusta WHERE mg_id_publicacion=".$row["pub_id"];
                                $resultado1 = mysqli_query($conexion,$SQL1);
                                $registro1 = mysqli_fetch_row($resultado1);	
                                echo "<form id='gusta' name='gusta' action='me_gusta.php' method='POST'>";
                                echo "<input type='image' id='b_gusta' name='b_gusta' src='images/like.png' alt='submit'>";
                                echo "<input type='hidden' id='id_pub' name='id_pub' value=".$row["pub_id"].">";
                                echo $registro1[0];
                                echo "</form>";
                                echo "</div>";
                                echo "<div class='pubfecha1'>";
                                echo $row["pub_fecha"];
                                echo "</div>";

                                echo "</div>";
                                
                                //Comentarios
                                echo "<div class='pubComentario'>";
                                
                                echo "<div class='pubTextoComentarios'>";
                                $SQL2 = "SELECT * FROM tblComentarioFoto WHERE cf_fot_id=".$row["pub_id"];
                                $resultado2 = mysqli_query($conexion,$SQL2);
                                
                                echo "<form id='Comentario' name='Comentario' method='POST' action='comentario1.php'>";
                                echo "<label>Comentario</label>";
                                echo "<input type='text' placeholder='Comentario' name='txtComentario' id='txtComentario'>";
                                echo "<input type='submit' id='Enviar'  value='Comentar'>";
                                echo "<input type='hidden' id='id_pub' name='id_pub' value=".$row["pub_id"].">";
		                        echo "</form>";
                                echo "</div>";
                                
                                echo "<div class='pubComUsu'>";
                                while($registro3=mysqli_fetch_assoc($resultado2)){
                                    echo "<div class='pubComentarioUsu'>";
                                    echo $registro3["cf_usu_nombre"];
                                    echo "</div>";
                                    echo "<div class='pubComentarioCarac'>";
                                    echo $registro3["cf_comentario"];
                                    echo "</div>";
                                }
                                echo "</div>";
                                
                                echo "</div>";



                                echo "</div>";
                            }
                            mysqli_close($conexion);
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="20%" class="opciones">
                    
                </td>
                <td width="70%">

                </td>
            </tr>
            <tr>
                <td width="20%" class="opciones">
                    
                </td>
                <td width="70%" class='grid-fotos'>
                        <?php
                        //Conexión base de datos
                        //Foto publicacion
                            $conexion = mysqli_connect("localhost","root","","red_social");
                            mysqli_select_db($conexion,"red_social"); 
                            $sql = "SELECT * FROM tblImagenes";
                            $res = mysqli_query($conexion, $sql);
                            while($row=mysqli_fetch_assoc($res)){
                                echo "<div class='publicacionImagen'>";
                                echo "<div class='pubImagen'>";
                                echo '<img src="images_data/'.$row["ima_archivo"].'" height=300 width=300/>';
                                echo "</div>";
                                echo "<div class='pubUsuarioImagen'>";
                                echo $row["ima_usuario"];
                                echo "</div>";
                                echo "<div class='pubDescripción'>";

                                echo "<div class='Descripcion'>";
                                echo $row["ima_descripcion"];
                                echo "</div>";

                                
                                echo "</div>";
                                echo "</div>";

                            }
                            mysqli_close($conexion);
                        ?>
                    
                </td>
            </tr>
            <tr>
                <td width="20%" class="opciones">
                    
                </td>
                <td width="70%">

                </td>
            </tr>
        </table>
    </section>
</body>
</html>