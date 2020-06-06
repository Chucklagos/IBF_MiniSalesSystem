<?php include ("db.php") ?>
<?php include ("header.php") ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <?php session_unset(); } ?>
    </div>
    <div class="col-md-12">
          <?php
          $query = "SELECT * FROM Cliente ORDER BY id DESC";
          $result_tasks = mysqli_query($conn, $query);    
          $mCantidad=0;
          $qCantidad=0;
          $cCantidad=0;
          $mTotal=0;
          $qTotal=0;
          $cTotal=0;
          $totalGlobal=0;
          

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php $row['Nombre']; ?></td>
            <td><?php $row['Cantidad_Mixtas']; ?></td>
            <td><?php $row['Cantidad_Quesillo']; ?></td>
            <td><?php $row['Cantidad_Chicharron']; ?></td>
            <td><?php $row['Total']; ?></td>
          </tr>
          <?php

            $mCantidad=$mCantidad+$row['Cantidad_Mixtas'];
            $qCantidad=$qCantidad+$row['Cantidad_Quesillo'];
            $cCantidad=$cCantidad+$row['Cantidad_Chicharron'];
          } 
        $mTotal=$mCantidad*15;
        $qTotal=$qCantidad*15;
        $cTotal=$cCantidad*15;
        $totalGlobal=$mTotal+$qTotal+$cTotal;
        ?>
      <table class="table table-bordered text-light table-sm">
        <tr>
          <td>Pupusa</td>
          <td>Cantidad Vendida</td>
          <td>Total</td>
        </tr>
        <tr>
          <td>Mixtas</td>
          <td><?php echo $mCantidad ?></td>
          <td><?php echo $mTotal ?></td>
        </tr>
        <tr>
          <td>Quesillo</td>
          <td><?php echo $qCantidad ?></td>
          <td><?php echo $qTotal ?></td>
        </tr>
        <tr>
          <td>Mixtas</td>
          <td><?php echo $mCantidad ?></td>
          <td><?php echo $cTotal ?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style="background-color:#D4AC0D"><?php echo $totalGlobal ?></td>
        </tr>
      </table>
      <a href="index.php" class="btn btn-warning">Volver</a>
    </div>
  </div>
</main>