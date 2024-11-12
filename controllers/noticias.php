<?php

if(isset($_POST)  && !empty($_POST)){
    if(isset($_POST["agregar"])){
        $nombre  = trim($_POST["titulo"]);
        $contenido =  trim($_POST["contenido"]);
        include("../models/noticias.php");
        $response = noticia::crear($nombre,$contenido);
    }


}