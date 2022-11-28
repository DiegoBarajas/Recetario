<?php

    session_start();
    require_once("db/conexion.php");

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE correo = '$correo'";
    $res = $c->query($sql);
    if($res->num_rows == 0){
        echo "Ese correo no está registrado";
    }else{
        $row = $res->fetch_array();

        if(password_verify($password, $row['password'])){
            $_SESSION['id'] = $row['id'];
            header("Location: Inicio.php");

        }else{
            echo "Contraseña incorrecta";
        }
    }

?>