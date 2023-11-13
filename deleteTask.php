<?php

include("db.php");

if(isset($_GET['idPedido'])) {
  $id = $_GET['idPedido'];
  $query = "DELETE FROM tbl_pedidos WHERE idPedido = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta fallida.");
  }

  $_SESSION['message'] = 'Borrado con Exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>