<?php
session_start();
if(empty($_SESSION['nombre']) || empty($_SESSION['email'])){
header('location: ../index.php');
}
?>