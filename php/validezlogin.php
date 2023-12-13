<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_register";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}




$correoElectronico = $_POST['correoElectronico'];
 
$contrasena = $_POST['contrasena'];

function verificarInicioSesion($correoElectronico, $contrasena) {
    global $conn;

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM clientes WHERE correo_electronico = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correoElectronico);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuario encontrado, verificar la contraseña
        $usuario = $result->fetch_assoc();
        if (password_verify($contrasena, $usuario['contrasena'])) {
            // Usuario autenticado correctamente
            header('Location: /ruta/PRINCIPAL.html');  // Ajusta la ruta según la estructura de tu proyecto
            exit(); // Asegura que no haya salida adicional antes del redireccionamiento
        } else {
            // Credencial incorrecta
            echo "¡Error al autenticar al usuario!";
        }
    }

    // Cerrar la conexión
    $stmt->close();
}

// Resto del código (procesamiento de datos de formulario, registro, etc.)

// Cerrar la conexión al final del script
$conn->close();
?>

