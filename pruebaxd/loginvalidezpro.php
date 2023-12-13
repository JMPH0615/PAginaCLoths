<?php



session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register";


   
$correoElectronico = $_POST['correoElectronico'];

$contrasena = $_POST['contrasena'];

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $correoElectronico = $_POST['correoElectronico'];
    $contrasena = $_POST['contrasena'];

    // Evitar inyección SQL utilizando declaraciones preparadas
    $sql = "SELECT * FROM proveedor WHERE Correo_electronico = ? AND Contrasena = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $correoElectronico, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuario autenticado correctamente
        $_SESSION['usuario'] = $correoElectronico;
        echo "¡Inicio de sesión exitoso!";
        header('Location: provedor.php');

        
        exit(); // Asegurar que el script se detenga después de redireccionar
    } else {
        // Credenciales incorrectas
        echo "¡Usuario o contraseña incorrectos!";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}


?>