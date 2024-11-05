<?php

class user {

    // Método para loguearse
    public static function login($usuario, $password) {
        include("../bd/config.php"); // Asegúrate de poner el punto y coma aquí
        
        // Preparar la consulta de SQL
        $stmt = $dbh->prepare("SELECT * FROM user WHERE usuario = :usuario AND password = :password");

        // Enlazar los parámetros para evitar inyecciones SQL
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
        // Especificamos el fetch mode antes de llamar a fetch()
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // Ejecutar la consulta
        $stmt->execute();

        // Mostrar los resultados
        while ($row = $stmt->fetch()) {
            echo "Nombre: {$row['name']} <br>";
            echo "Apellido: {$row['last_name']} <br><br>";
        }
        
    }
}
