<?php

    require_once("db/conexion.php");
    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: /inicio_sesion.html");
    }

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM usuario WHERE id='$id'";
    $res = $c->query($sql);
    $row = $res->fetch_array();

    $nombre = $row['nombre'];
    $correo = $row['correo'];

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="perfil.css">
        <link rel="shortcut icon" href="/imagenes/Logotipo.png" type="image/*">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head> 
    <body>
           
        <header>
            <section id="barra-grande">
                <section id="logo">
                    <img src="imagenes/Logotipo.png" id="img-logo">
                </section>
                <nav id="barra">
                    <input type="search" name="barra-bu" id="barra-bu" >
                </nav>
                <nav id="bus">
                    <button id="boton-bus">Buscar</button>
                </nav>
            </section>               
            
        </header>
        
        <main>
        
            <article id="contenido">
                <section class="info">
                    <section>
                        
                        
                    </section>
                </section>
                <section class="proce">
               <section>
                   <br>
                   <br>
                   <p id="miperfil">Mi perfil</p>
                  
                   <ul>
                   
                    <form action="">
                        <br>
                        <p id="nom">Nombre</p>
                        <br>
                        <input type="text" value="<?php echo $nombre ?>" placeholder="Gatolunar777" id="Inom" readonly>
                        <br>
                        <p id="corr">Correo</p>
                        <br>
                        <input type="text" value="<?php echo $correo ?>" placeholder="example@tamal.com" id="Icorr" readonly>
                    </form>   
                    <br>
                    <a href="Inicio.php"><button id="regresar">Regresar al inicio</button></a>
                    <br>
                    <br>
                </section>
            </article>
        </main>
        
        <footer>
            <section id="quienes-somos">
                <P id="quien">Somos una empresa dedicada a la puclicacion de recetas entre una gran comunidad</P>
            </section>
            <section id="con-redes">
                <section id="redes">  
                    <p>Redes</p>   
                    <br>
                    <ul>
                        <li><a href="" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>                                                     
                </section>
            </section>                
            <section id="Quejas">
                <p id="que">Quejas y sugerencias marcar al:</p>
                <p>3322230894 <br> o <br> al Correo:  <br> <a href="mailto:" id="correo">JJAJAJAJ@kdhjdjsjd.com</a></p>
            </section>
            <section id="copi">
                <p>© Copyrihgt, comida </p>
            </section>
        </footer>         
    </body>
</html>