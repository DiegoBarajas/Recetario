<?php
    require_once("db/conexion.php");
    $id = $_GET['id'];

    $consulta = "SELECT imagen FROM receta WHERE id='$id'";
    $res = $c->query($consulta);
    $img = $res->fetch_array()['imagen'];

    header("Content-type: image/jpg"); 
    echo($img);
?>