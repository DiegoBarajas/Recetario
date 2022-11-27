<?php
    require_once("db/conexion.php");

    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $password= $_POST['password'];
    $re_password= $_POST['re_password'];

    if($password != $re_password){
        echo "Las contraseñas no coinciden, intentalo nuevamente";
    }else{
        $enc_pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario(nombre, correo, password) VALUES ('$nombre','$correo', '$enc_pass')";

        $c->query($sql);

        header("Location: inicio_sesion.html");
    }

?>