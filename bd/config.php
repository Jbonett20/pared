<?php
include("datos.php");
try {
    $dbh = new PDO($dsn, dbuser, dbpassword);
} catch (PDOException $e){
    echo $e->getMessage();
}

?>