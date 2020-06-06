<?php include ("db.php") ?>
<?php include ("header.php") ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <div class="card card-body text-light" style="background-color:#0F4C81">
        <form action="register_purchase.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre del cliente" autofocus>
          </div>
          <div class="form-group">
            <br><label>¿Cuantas Mixtas?</label><input type="number" name="C_Mixtas" class="form-control" placeholder="¿Cuantas Mixtas?" value="0" autofocus>
            <br><label>¿Cuantas de Quesillo?</label><input type="number" name="C_Quesillo" class="form-control" value="0" autofocus>
            <br><label>¿Cuantas de Chicharron?</label><input type="number" name="C_Chicharron" class="form-control" value="0" autofocus>
            </div>
          <input type="submit" name="register_purchase" class="btn btn-success btn-block" value="Registrar Compra">
        </form>
        <br>
        <form action="totals.php" method="post">
          <div class="form-group">
            <input type="submit" name="totals" class="btn btn-warning btn-block" value="Ver Totales">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered text-light table-sm">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Cant. Mixtas</th>
            <th>Cant. Quesillo</th>
            <th>Cant. Chicharron</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM Cliente ORDER BY id DESC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Cantidad_Mixtas']; ?></td>
            <td><?php echo $row['Cantidad_Quesillo']; ?></td>
            <td><?php echo $row['Cantidad_Chicharron']; ?></td>
            <td><?php echo $row['Total']; ?></td>
            <td>
              <a href="delete_purchase.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                x
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>