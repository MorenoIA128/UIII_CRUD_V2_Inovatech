<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  
    $idCliente = $_POST['idCliente'];
    $idEmpleado = $_POST['idEmpleado'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $metodoDePago = $_POST['metodoDePago'];
    $direccion = $_POST['direccion'];
    $numeroDeSeguimiento = $_POST['numeroDeSeguimiento'];
    $fechaDeEntrega = $_POST['fechaDeEntrega'];
  $query = "INSERT INTO tbl_pedidos(idCliente, idEmpleado, fecha, total, metodoDePago, direccion, numeroDeSeguimiento, fechaDeEntrega) VALUES ('$idCliente', '$idEmpleado', '$fecha', '$total', '$metodoDePago', '$direccion', '$numeroDeSeguimiento', '$fechaDeEntrega')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>