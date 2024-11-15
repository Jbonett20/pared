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
            // Verificar si ya existe un usuario con el mismo correo o identificación
            $sql = "SELECT COUNT(*) FROM user WHERE email = ? OR identification = ?";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$correo, $identificacion]);
            $count = $stmt->fetchColumn();
            
            if ($count > 0) {
                return 3;
            }
            
            // Si no hay conflicto, continuar con el registro
            $hashedPassword = password_hash($clave, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (name, last_name, identification, email, usuario, password) VALUES (?,?,?,?,?,?)";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$nombre, $apellido, $identificacion, $correo, $usuario, $hashedPassword]);
            $user = $dbh->lastInsertId();
            if (!empty($user) && $user != 0) {
                return 1;  // Registro exitoso
            } else {
                return 2;  // Error al registrar
            }
    
        } catch (PDOException $e) {
            return 'Error: ' . $e->getMessage(); 
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

