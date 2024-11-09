<?php

if(isset($_POST)  && !empty($_POST)){
    if(isset($_POST["register"])){
        $nombre = trim($_POST["name"]);
        $apellido = trim($_POST["last_name"]);
        $identificacion = trim($_POST["identification"]);
        $correo = trim($_POST["email"]);
        $usuario = trim($_POST["usuario"]);
        $contraseña = trim($_POST["password"]);

        include('../models/usuarios.php'); 
        $response = usuarios::registrar($nombre, $apellido, $identificacion, $correo, $usuario, $contraseña);
    }
}else{
    
}