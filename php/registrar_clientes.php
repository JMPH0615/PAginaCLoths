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

// Obtener los datos del formulario (suponiendo que estás recibiendo datos mediante POST)
$nombreCompleto = $_POST['nombreCompleto'];
$correoElectronico = $_POST['correoElectronico'];
$nombreUsuario = $_POST['nombreUsuario'];
$contrasena = $_POST['contrasena'];

// Validaciones
if (!preg_match("/^[a-zA-Z0-9_]+$/", $nombreUsuario)) {
    mostrarErrorYRedireccion("¡Oops! El nombre de usuario ingresado no está bien escrito. Utiliza solo letras, números y guiones bajos.");
}

if (empty($nombreCompleto) || empty($correoElectronico) || empty($nombreUsuario) || empty($contrasena)) {
    mostrarErrorYRedireccion("¡Oops! Debes llenar todos los campos.");
}

// Consulta SQL para verificar si el cliente ya está registrado
$verificar_sql = "SELECT * FROM clientes WHERE correo_electronico = ? OR usuario = ?";
$verificar_stmt = $conn->prepare($verificar_sql);
$verificar_stmt->bind_param("ss", $correoElectronico, $nombreUsuario);
$verificar_stmt->execute();
$verificar_result = $verificar_stmt->get_result();

if ($verificar_result->num_rows > 0) {
    // El cliente ya está registrado
    mostrarErrorYRedireccion("¡Oops! El cliente ya está registrado.");
} else {
    if (!filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
        mostrarErrorYRedireccion("¡Oops! El formato del correo electrónico es incorrecto.");
    }

    if (strlen($contrasena) < 8) {
        mostrarErrorYRedireccion("¡Oops! La contraseña es demasiado corta. Debe tener al menos 8 caracteres.");
    }

    // Validar la complejidad de la contraseña (puedes agregar reglas adicionales según tus requisitos)
    if (!preg_match("/[A-Za-z]/", $contrasena) || !preg_match("/[0-9]/", $contrasena)) {
        mostrarErrorYRedireccion("¡Oops! La contraseña no es lo suficientemente segura. Debe contener letras y números.");
    }

    // Cliente no registrado, proceder con la inserción
    $insertar_sql = "INSERT INTO clientes (nombre_completo, correo_electronico, usuario, contrasena) VALUES (?, ?, ?, ?)";
    $insertar_stmt = $conn->prepare($insertar_sql);
    $insertar_stmt->bind_param("ssss", $nombreCompleto, $correoElectronico, $nombreUsuario, $contrasena);

    
if ($insertar_stmt->execute()) {
    // Cliente insertado correctamente
    // Ahora verificamos el inicio de sesión

    // Configuramos un mensaje de éxito
    $mensaje = '¡Bienvenido! Te has registrado exitosamente.';

    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Exitoso</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background-color: #f4f4f4;
            }
            .modal {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                text-align: center;
            }
            .btn-login {
                background-color: #4caf50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="modal">
            <h2>' . $mensaje . '</h2>
            <p>Ahora puedes iniciar sesión.</p>
            <button class="btn-login" onclick="redirect()">Ir a Iniciar Sesión</button>
        </div>
        <script>
            function redirect() {
                window.location.href = "login.php";
            }
        </script>
    </body>
    </html>';
} else {
    echo "Error al insertar el cliente: " . $insertar_stmt->error;
}


    
}

// Cerrar las conexiones
$verificar_stmt->close();
$insertar_stmt->close();
$conn->close();

// Función para mostrar un mensaje de error y redireccionar
function mostrarErrorYRedireccion($mensaje) {
    echo "<script>
            alert('$mensaje');
            window.location.href='register.php';
          </script>";
    exit; // Detiene la ejecución del script
}






?>