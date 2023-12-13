
<?php


include("../../conexion.php");

$stm = $conexion->prepare("SELECT * FROM clientes");
    $stm->execute();
    $clientes = $stm->fetchAll(PDO::FETCH_ASSOC);







    if (isset($_GET['ID'])) {
        $txtID = isset($_GET['ID']) ? $_GET['ID'] : "";
        
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=login_register", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $stm = $conexion->prepare("DELETE FROM clientes WHERE ID = :ID");
            $stm->bindParam(":ID", $txtID);
            $stm->execute();
    
            header("location: index.php");
            exit();  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
?>




<?php include("../../template/header.php"); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo cliente 
</button>









<div
    class="table-responsive-sm"
>
    <table
        class="table table-dark"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col"> Nombre Completo </th>
                <th scope="col">Correo Electronico </th>
                <th scope="col">Usuario  </th>
                <th scope="col"> Acciones   </th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($clientes as $cliente) { ?>
            <tr class="">
                <td scope="row">  <?php echo $cliente ['ID']; ?></td>
                <td> <?php echo $cliente ['nombre_completo']; ?></td>
                <td> <?php echo $cliente ['correo_electronico']; ?></td>
                <td> <?php echo $cliente ['usuario']; ?></td>
                <td> 
                <a href="edit.php?ID=<?php echo $cliente ['ID']; ?>" class=" btn btn-success ">Editar</a>
                <a href="index.php?ID=<?php echo $cliente ['ID']; ?>" class=" btn btn-danger ">Eliminar</a>



                </td>
            </tr>
            
            <?php } ?>


        </tbody>
    </table>
</div>


<?php include("create.php"); ?>












<?php include("../../template/fooder.php"); ?>