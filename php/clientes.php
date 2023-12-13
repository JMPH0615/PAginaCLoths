<?php
// Configura las credenciales de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

// Crea la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los datos de los clientes
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

// Verifica si hay resultados
if ($result->num_rows > 0) {
    // Convierte los resultados a formato JSON
    $clientes = array();
    while ($row = $result->fetch_assoc()) {
        $clientes[] = $row;
    }
    echo json_encode($clientes);
} else {
    echo "0 resultados";
}

// Cierra la conexión
$conn->close();
?>