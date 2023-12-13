<?php

$servidor = "localhost";
$db = "login_register";
$username = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username, $password);
    
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>
