<?php
// Variable para almacenar mensajes de éxito o error
$mensajeExito = $mensajeError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];

  // Obtener la dirección de correo electrónico del destinatario desde el formulario
  $destinatario = $_POST["correo_destinatario"];

  // Configuración de Mailtrap
  $smtpHost = "sandbox.smtp.mailtrap.io";
  $smtpPort = 587;
  $smtpUsuario = "f71c5c2b5b014c";
  $smtpClave = "5f26bd4e17df2a"; // Coloca la contraseña correcta aquí

  $cabeceras = "From: $nombre <$destinatario>\r\n";
  $cabeceras .= "Reply-To: $destinatario\r\n";
  $cabeceras .= "Content-type: text/html\r\n";

  $contenido = "Nombre: $nombre<br>";
  $contenido .= "Asunto: $asunto<br>";
  $contenido .= "Mensaje: $mensaje<br>";

  // Configuración adicional para usar el servidor SMTP de Mailtrap
  ini_set("SMTP", $smtpHost);
  ini_set("smtp_port", $smtpPort);
  ini_set("sendmail_from", $destinatario);

  // Función para enviar correo usando SMTP
  function smtp_mail($to, $subject, $message, $headers) {
    global $smtpHost, $smtpPort, $smtpUsuario, $smtpClave;

    $smtpConnect = fsockopen($smtpHost, $smtpPort, $errno, $errstr, 15);
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "Failed to connect: $smtpResponse";
    }

    fputs($smtpConnect, "AUTH LOGIN\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "AUTH LOGIN failed: $smtpResponse";
    }

    fputs($smtpConnect, base64_encode($smtpUsuario) . "\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "Username not accepted: $smtpResponse";
    }

    fputs($smtpConnect, base64_encode($smtpClave) . "\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "Password not accepted: $smtpResponse";
    }

    fputs($smtpConnect, "MAIL FROM: <$smtpUsuario>\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "MAIL FROM failed: $smtpResponse";
    }

    fputs($smtpConnect, "RCPT TO: <$to>\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "RCPT TO failed: $smtpResponse";
    }

    fputs($smtpConnect, "DATA\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "DATA command failed: $smtpResponse";
    }

    fputs($smtpConnect, "Subject: $subject\r\n$headers\r\n\r\n$message\r\n.\r\n");
    $smtpResponse = fgets($smtpConnect, 515);
    if (empty($smtpConnect)) {
      return "Message sending failed: $smtpResponse";
    }

    fputs($smtpConnect, "QUIT\r\n");
    fclose($smtpConnect);

    return "Message sent successfully!";
  }

  // Intentar enviar el correo
  $envioCorreo = smtp_mail($destinatario, $asunto, $contenido, $cabeceras);

  if (strpos($envioCorreo, 'Message sent successfully') !== false) {
    $mensajeExito = 'Mensajes Disponibles - Recuerden agregar una dirección valida que nos ayudara a contactar con ustedes';
  } else {
    $mensajeError = 'Error al enviar el mensaje. Por favor, inténtalo de nuevo. Detalles: ' . $envioCorreo;
  }
  
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Agregar enlace a Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>Página de Proveedores</title>
  <style>
    /* Estilo adicional para el menú lateral */
    .sidebar {
      background-color: #000; /* Fondo negro */
      color: #fff; /* Texto blanco */
      border-right: 1px solid #333; /* Borde derecho gris oscuro */
      min-height: 100vh; /* Altura mínima del 100% del viewport */
    }

    .sidebar a {
      color: #fff; /* Enlaces blancos en el menú */
    }

    .sidebar a:hover {
      background-color: #333; /* Color de fondo en el hover */
    }

    /* Estilo adicional para la sección de notificaciones */
    .notifications-container {
      background-color: #f8f9fa; /* Fondo gris claro */
      padding: 20px;
      border: 1px solid #ccc;
      margin-top: 20px;
      border-radius: 5px;
      display: none; /* Inicialmente oculta la sección de notificaciones */
    }

    /* Estilo para el contenedor de la gráfica */
    .chart-container {
      margin-top: 20px;
      display: none; /* Inicialmente oculta la gráfica de ventas */
    }

    /* Estilo para el contenedor de la valoración */
    .valoracion-container {
      margin-top: 20px;
      display: none; /* Inicialmente oculta el contenedor de valoración */
    }

    /* Estilo para el formulario de contacto */
    .contact-form {
      padding: 20px;
      background-color: #f8f9fa;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <!-- Barra de Navegación -->
  <nav class="navbar navbar-dark bg-dark mx-auto">
    <a class="navbar-brand" href="">FASHIONFOOTWORKS</a>
  </nav>

  <!-- Contenido de la Página -->
  <div class="container-fluid mt-3">
    <div class="row">
      
      <!-- Menú Lateral -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="mostrarContenido('seccionValoracion')">Valoración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="mostrarContenido('seccionVentas')">Número de Ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="mostrarContenido('seccionNotificaciones')">Notificaciones</a>
          </li>
          <!-- Formulario de contacto -->
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="mostrarContenido('seccionContacto')">Contacto</a>
          </li>
          <button id="cerrarSesionBtn" onclick="cerrarSesion()">Cerrar Sesión</button>

          
        </ul>
      </nav>
      
      <!-- Contenido Principal -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h1 class="mt-4 text-center">Bienvenido a la Página de Proveedores</h1>
        <p class="text-center">Da clic en el menú lateral para visualizar su contenido.</p>
        
        <!-- Sección de Valoración -->
        <div class="valoracion-container text-center" id="seccionValoracion">
          <h2>Valoración de Productos</h2>
          <!-- Agrega aquí el contenido específico de la sección de Valoración -->
          <p>Camisetas: <span class="product-rating">★★★★★ (5/5)</span></p>
          <p>Pantalones: <span class="product-rating">★★★☆☆ (3/5)</span></p>
          <p>Vestidos: <span class="product-rating">★★☆☆☆ (2/5)</span></p>
          <p>Chaquetas: <span class="product-rating">★★★☆☆ (3/5)</span></p>
          <p>Bufandas: <span class="product-rating">★★★☆☆ (3/5)</span></p>
          <p>Gorros: <span class="product-rating">★★★★☆ (4/5)</span></p>
          <p>Faldas:  <span class="product-rating">★★★☆☆ (3/5)</span></p>
          <!-- Puedes agregar más elementos según sea necesario -->
        </div>

        <!-- Sección de Ventas -->
        <div class="chart-container text-center" id="seccionVentas">
          <h2>Número de Ventas a lo largo del Año</h2>
          <canvas id="chartVentas" width="400" height="200"></canvas>
        </div>
        
        <!-- Sección de Notificaciones -->
        <div class="notifications-container text-center" id="seccionNotificaciones">
          <h2>Notificaciones de Stock </h2>
          <p>Camisetas: Agotadas</p>
          <p>Pantalones: Bajo stock</p>
          <p>Vestidos: Bajo stock</p>
          <p>Chaquetas: Bajo stock</p>
          <p>Bufandas: Bajo stock</p>
          <p>Gorros: Agotados</p>
          <p>Faldas: Bajo stock</p>
          <!-- Puedes seguir agregando más notificaciones según sea necesario -->
        </div>

        <!-- Sección de Contacto -->
        <div class="contact-form" id="seccionContacto" style="display: none;">
          <h2>Contacto</h2>
          <?php
            if ($mensajeExito) {
                echo '<div class="alert alert-success">' . $mensajeExito . '</div>';
            } elseif ($mensajeError) {
                echo '<div class="alert alert-danger">' . $mensajeError . '</div>';
            }
            ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-group">
              <label for="asunto">Asunto:</label>
              <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingrese el asunto" required>
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje:</label>
              <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escriba su mensaje aquí" required></textarea>
            </div>
            <div class="form-group">
                <label for="correo_destinatario">Correo del Destinatario:</label>
                <input type="email" class="form-control" id="correo_destinatario" name="correo_destinatario" placeholder="Ingrese el correo del destinatario" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
          </form>
        </div>

      </main>
      
    </div>
  </div>

  <!-- Scripts de Bootstrap y jQuery (asegúrate de incluir jQuery antes de Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Script para mostrar/ocultar el contenido -->
  <script>
    function mostrarContenido(id) {
      // Ocultar todos los contenidos
      var contenidos = document.querySelectorAll('.chart-container, .notifications-container, .valoracion-container, #seccionContacto');
      contenidos.forEach(function(contenido) {
        contenido.style.display = 'none';
      });

      // Mostrar el contenido específico
      var contenidoEspecifico = document.getElementById(id);
      if (contenidoEspecifico) {
        contenidoEspecifico.style.display = 'block';
      }
    }
  </script>

  <!-- Script para la gráfica de ventas -->
  <script>
    var ctx = document.getElementById('chartVentas').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        datasets: [{
          label: 'Ventas 2023',
          data: [10, 15, 7, 12, 8, 20, 15, 25, 18, 10, 30, 22],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

<script>
  // Función para cerrar sesión y redirigir al usuario al login
  function cerrarSesion() {
    // Aquí puedes realizar acciones de cierre de sesión, como limpiar cookies o tokens de autenticación en el lado del cliente.

    // Redirigir al usuario a la página de inicio de sesión (reemplaza 'login.html' con tu ruta correcta).
    window.location.href = 'loginpro.php';
  }
</script>

</body>
</html>