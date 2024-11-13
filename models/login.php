<?php

class User {

    // Método para loguearse
    public static function login($usuario, $password) {
        include("../bd/config.php"); 
        
        // Verificar que el usuario existe en la base de datos
        $sql = "SELECT * FROM user WHERE usuario = :usuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si el usuario existe
        if ($user) {
            // El usuario existe, ahora verificamos la contraseña
            if (password_verify($password, $user['password'])) {
                // Iniciar la sesión y establecer variables de sesión
               
                session_start();
               $_SESSION['idusuario'] = $user['user_id'];
                $_SESSION['nombre'] = $user['name'];  
                 $_SESSION['apellidos'] = $user['last_name']; 
                 $_SESSION['email'] = $user['email']; 
                 $_SESSION['rolid'] = $user['rolid'];
                 $_SESSION['usuario'] = $user['usuario'];
                 $_SESSION['fechaCreacion'] = $user['date_creation'];
                 $_SESSION['estado'] = $user['status'];
                 
                // Redirigir al usuario a la página de inicio
               header('Location: ../views/muro.php');
                
                exit; // Asegurarse de que no se ejecute más código después de la redirección
            } else {
                // Contraseña incorrecta
                echo "Contraseña incorrecta.";
                return null;
            }
        } else {
            // Usuario no encontrado
            echo "Usuario no encontrado.";
            return null;
        }
    }
}

