<?php

class usuarios {

    public static function listar ($id){
        try{
            
          }catch(PDOException $e){
            echo $e->getMessage();
          }

    }
    public static function registrar($nombre, $apellido, $identificacion, $correo, $usuario, $clave) {
        include("../bd/config.php"); 
        try {
            $hashedPassword =  password_hash($clave, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (name, last_name, identification,email, usuario,password) VALUES (?,?,?,?,?,?)";
            $stmt = $dbh->prepare($sql)->execute([$nombre,$apellido,$identificacion,$correo,$usuario,$hashedPassword]);
            $user = $dbh->lastInsertId();
            if(!empty($user) || $user != 0){
               header('location: ../index.php');
            }else{
                echo 'error';
            }
              
       }catch(PDOException $e){
        echo $e->getMessage();
        }
    }

    
    public static function editar($id) {
        try{
            
           
          }catch(PDOException $e){
            echo $e->getMessage();
          }

    }
    public static function eliminar($id){
        try
        {
           
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }

    }



}

