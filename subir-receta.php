<?php

    require_once("db/conexion.php");

    $nombre = $_POST['nombre'];
    $ingredientes = $_POST['ingredientes'];
    $procedimiento = $_POST['procedimiento'];
    $img = $_FILES['imagen']['tmp_name'];
    $imagen = addslashes(file_get_contents($img));

    $sql = "INSERT INTO receta (nombre, ingredientes, procedimiento, imagen) VALUES ('$nombre', '$ingredientes', '$procedimiento', '$imagen')";

    $c->query($sql);

    header("location: index.php");

?>