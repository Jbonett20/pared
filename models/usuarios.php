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
                echo "Usuario creado con exito";
            }else{
                echo "Error al crear el usuario";
            }
              
       }catch(PDOException $e){
        echo $e->getMessage();
        }
    }

    
    public static function editar($id) {
        try{
            $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET nombre=?, apellido=?,  
        identificacion=?,correo=?,usuario=?,clave=? WHERE id=?");
            $stm->execute(array($this->nombre,$this->apellido,$this->identificacion,$this->correo,$this->usuario,$this->clave,$this->id));
          }catch(PDOException $e){
            echo $e->getMessage();
          }

    }
    public static function eliminar($id){
        try
        {
            $stm = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
            $stm->execute(array($id));
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }

    }



}

