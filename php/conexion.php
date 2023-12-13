<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}else{
    echo"conectado";
}

$sql = "SELECT * FROM clientes";
$resultado = $conexion->query($sql);

?>