<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">
        <div class="form-group">
          <input name="idCliente" type="number" class="form-control" value="" placeholder="idCliente">
        </div>
        <div class="form-group">
          <input name="idEmpleado" type="number" class="form-control" value="" placeholder="idEmpleado">
        </div>
        <div class="form-group">
          <input name="fecha" type="date" class="form-control" value="" placeholder="fecha">
        </div>
        <div class="form-group">
          <input name="total" type="number" class="form-control" value="" placeholder="total">
        </div>
        <div class="form-group">
          <input name="metodoDePago" type="text" class="form-control" value="" placeholder="metodoDePago">
        </div>       
            <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="" placeholder="direccion">
        </div>
        <div class="form-group">
          <input name="numeroDeSeguimiento" type="text" class="form-control" value="" placeholder="numeroDeSeguimiento">
        </div>
        <div class="form-group">
          <input name="fechaDeEntrega" type="date" class="form-control" value="" placeholder="fechaDeEntrega">
        </div>
          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>idPedido</th>
            <th>idCliente</th>
            <th>idEmpleado</th>
            <th>fecha</th>
            <th>total</th>
            <th>metodoDePago</th>
            <th>direccion</th>
            <th>numeroDeSeguimiento</th>
            <th>fechaDeEntrega</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_pedidos";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['idPedido']; ?></td>
            <td><?php echo $row['idCliente']; ?></td>
            <td><?php echo $row['idEmpleado']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['metodoDePago']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['numeroDeSeguimiento']; ?></td>
            <td><?php echo $row['fechaDeEntrega']; ?></td>

            <td>
              <a href="edit.php?idPedido=<?php echo $row['idPedido']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?idPedido=<?php echo $row['idPedido']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>