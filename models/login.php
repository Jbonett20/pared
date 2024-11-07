<?php

class User {

    // Método para loguearse
    public static function login($usuario, $password) {
        include("../bd/config.php"); 
        $sql = "SELECT * FROM user WHERE usuario = :usuario";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        /* $hashedPassword = password_hash($password, PASSWORD_DEFAULT); */
        
        // Verificar si el usuario existe
        if ($user) {
            // El usuario existe, ahora verificamos la contraseña
            if (password_verify($password, $user['password'])) {
                // Contraseña correcta
                echo "Usuario logueado correctamente.";
                return $user;  
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

?>
