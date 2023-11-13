<?php
include("db.php");
$idPedido = '';
$idCliente= '';
$idEmpleado= '';
$fecha= '';
$total= '';
$metodoDePago= '';
$direccion= '';
$numeroDeSeguimiento= '';
$fechaDeEntrega= '';

if  (isset($_GET['idPedido'])) {
  $id = $_GET['idPedido'];
  $query = "SELECT * FROM tbl_pedidos WHERE idPedido=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $idPedido = $row['idPedido'];
    $idCliente = $row['idCliente'];
    $idEmpleado = $row['idEmpleado'];
    $fecha = $row['fecha'];
    $total = $row['total'];
    $metodoDePago = $row['metodoDePago'];
    $direccion = $row['direccion'];
    $numeroDeSeguimiento = $row['numeroDeSeguimiento'];
    $fechaDeEntrega = $row['fechaDeEntrega'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['idPedido'];
    $idCliente = $_POST['idCliente'];
    $idEmpleado = $_POST['idEmpleado'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $metodoDePago = $_POST['metodoDePago'];
    $direccion = $_POST['direccion'];
    $numeroDeSeguimiento = $_POST['numeroDeSeguimiento'];
    $fechaDeEntrega = $_POST['fechaDeEntrega'];


  $query = "UPDATE tbl_pedidos set idCliente = '$idCliente', idEmpleado = '$idEmpleado', fecha = '$fecha', total = '$total', metodoDePago = '$metodoDePago', direccion = '$direccion', numeroDeSeguimiento = '$numeroDeSeguimiento', fechaDeEntrega = '$fechaDeEntrega' WHERE idPedido=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idPedido=<?php echo $_GET['idPedido']; ?>" method="POST">
        <div class="form-group">
          <input name="idCliente" type="number" class="form-control" value="<?php echo $idCliente; ?>" placeholder="idCliente">
        </div>
        <div class="form-group">
          <input name="idEmpleado" type="number" class="form-control" value="<?php echo $idEmpleado; ?>" placeholder="idEmpleado">
        </div>
        <div class="form-group">
          <input name="fecha" type="date" class="form-control" value="<?php echo $fecha; ?>" placeholder="fecha">
        </div>
        <div class="form-group">
          <input name="total" type="number" class="form-control" value="<?php echo $total; ?>" placeholder="total">
        </div>
        <div class="form-group">
          <input name="metodoDePago" type="text" class="form-control" value="<?php echo $metodoDePago; ?>" placeholder="metodoDePago">
        </div>       
            <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="direccion">
        </div>
        <div class="form-group">
          <input name="numeroDeSeguimiento" type="text" class="form-control" value="<?php echo $numeroDeSeguimiento; ?>" placeholder="numeroDeSeguimiento">
        </div>
        <div class="form-group">
          <input name="fechaDeEntrega" type="date" class="form-control" value="<?php echo $fechaDeEntrega; ?>" placeholder="fechaDeEntrega">
        </div>
        <button class="btn-success" name="update">
          ACTUALIZAR
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>