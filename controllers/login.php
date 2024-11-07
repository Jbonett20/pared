<?php

if(isset($_POST)  && !empty($_POST)){
    if(isset($_POST["loggin"])){
        $usuario  = trim($_POST["usuario"]);
        $password =  trim($_POST["password"]);
       include("../models/login.php");
       $response = user::login($usuario,$password);
       echo '<pre>';
       print_r($response);
       echo '</pre>';


    }



}
