<?php
include("../../conexion.php");

// Inicializar variables para el formulario
$txtID = $nombre = $correo = $usuario = "";

// Verificar si se proporciona un ID para editar
if (isset($_GET['ID'])) {
    $txtID = isset($_GET['ID']) ? $_GET['ID'] : "";

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=login_register", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm_select = $conexion->prepare("SELECT * FROM clientes WHERE ID = :ID");
        $stm_select->bindParam(":ID", $txtID);
        $stm_select->execute();
        $cliente = $stm_select->fetch(PDO::FETCH_ASSOC);

        if ($cliente) {
            // Datos del cliente para el formulario de edición
            $txtID = $cliente['ID'];
            $nombre = $cliente['nombre_completo'];
            $correo = $cliente['correo_electronico'];
            $usuario = $cliente['usuario'];
        } else {
            echo "Cliente no encontrado";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";

    try {
        if ($txtID) {
            // Formulario de edición
            $stm_update = $conexion->prepare("UPDATE clientes SET nombre_completo = :nombre, correo_electronico = :correo, usuario = :usuario WHERE ID = :ID");
            $stm_update->bindParam(":ID", $txtID);
            $stm_update->bindParam(":nombre", $nombre);
            $stm_update->bindParam(":correo", $correo);
            $stm_update->bindParam(":usuario", $usuario);
            $stm_update->execute();
        } else {
            // Formulario de inserción
            $stm = $conexion->prepare("INSERT INTO clientes (ID, nombre_completo, correo_electronico, usuario) VALUES (NULL, :nombre, :correo, :usuario)");
            $stm->bindParam(":nombre", $nombre);
            $stm->bindParam(":correo", $correo);
            $stm->bindParam(":usuario", $usuario);
            $stm->execute();
        }

        header("location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<?php include("../../template/header.php"); ?>

<form action="" method="post">
    <input type="hidden" class="form-control" name="txtID" value="<?php echo $cliente['ID']; ?>" placeholder="ID">

    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $cliente['nombre_completo']; ?>" placeholder="Ingrese Nombre">

    <label for="correo">Correo Electrónico</label>
    <input type="text" class="form-control" name="correo" value="<?php echo $cliente['correo_electronico']; ?>" placeholder="Ingrese Correo">

    <label for="usuario">Usuario</label>
    <input type="text" class="form-control" name="usuario" value="<?php echo $cliente['usuario']; ?>" placeholder="Ingrese Usuario">

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

        <!-- Agrega el botón de enviar -->
        <div class="modal-footer">
            <a href="index.php" class="btnn btn-danger">Cancelar</a>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </form>





      <?php




    