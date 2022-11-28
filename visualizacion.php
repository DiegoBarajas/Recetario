<?php

    require_once("db/conexion.php");
    $id = $_GET['id'];

    $sql = "SELECT * FROM receta WHERE id = '$id'";
    $res = $c->query($sql);
    $row = $res->fetch_array();

    $nombre = $row['nombre'];
    $ingredientes = $row['ingredientes'];
    $procedimiento = $row['procedimiento'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualizacion</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="visualizacion.css">
    <link rel="shortcut icon" href="/imagenes/Logotipo.png" type="image/*">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>
    <section id="categorias">
        <nav id="catego">
            <nav class="select-categorias">
                <h3>Doña Lucha</h3>
            </nav>
            <nav class="select-categorias">
                <a href="Inicio.html">Inicio</a>
            </nav>
            <nav class="select-categorias">
                <a href="formulario_de_receta.html">Agregar receta</a>
            </nav>
            <nav class="select-categorias">
                <a href="perfil.html">Perfil</a>
            </nav>
            <nav>
                <a href="logout.php"><button id="cerrar">Cerrar sesion</button></a>
            </nav>
        </nav>
    </section>  
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
        <nav id="usuario">
                <img src="imagenes/user.jpg" id="user-img">
        </nav>
    </header>  
    <main>
        <article id="comidas">
            <section id="barrita">
                
                <p id="rec"><?php echo $nombre ?></p>

            </section>
            <section id="proce">
                <br>
                <h5 id="prcs">PROCEDIMIENTO<br><br><?php echo $procedimiento ?></h5>

            </section>

            <section id="imagen">

                <img class="img-rece" src="img-receta.php?id=<?php echo $id ?>" alt="">

            </section>
            <section id="ingre">
                <br>
                <h5 id="ingred">INGREDIENTES<br><br><?php echo $ingredientes ?></h5>

            </section>
            
          
           
        </article>
    </main> 
    <br>
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