<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=login_register", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stm = $conexion->prepare("INSERT INTO clientes (ID, nombre_completo, correo_electronico, usuario) VALUES (NULL, :nombre, :correo, :usuario)");
        $stm->bindParam(":nombre", $nombre);
        $stm->bindParam(":correo", $correo);
        $stm->bindParam(":usuario", $usuario);
 
      
        $stm->execute();

       
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>







<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" value="" placeholder="Ingrese Nombre">
       
          <label for="correo">Correo Electrónico</label>
          <input type="text" class="form-control" name="correo" value="" placeholder="Ingrese Correo">
       
          <label for="usuario">Usuario</label>
          <input type="text" class="form-control" name="usuario" value="" placeholder="Ingrese Usuario">

          
        </div>
        <!-- Agrega el botón de enviar -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>