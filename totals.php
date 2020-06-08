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
        <label>Total Pagadas</label>
          <?php
          $query = "SELECT * FROM Cliente WHERE Pago='Si' ORDER BY id DESC";
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
      <table class="table table-sm table-hover">
        <thead class="thead-light">
        <tr>
          <th>Pupusa</th>
          <th>Cantidad Vendida</th>
          <th>Total</th>
        </tr>
        </thead>
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
          <td>Chicharron</td>
          <td><?php echo $cCantidad ?></td>
          <td><?php echo $cTotal ?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style="background-color:#D4AC0D"><?php echo $totalGlobal ?></td>
        </tr>
      </table>
    </div>
  </div>
  <!--------------------------------------------------->
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <?php session_unset(); } ?>
    </div>
    <div class="col-md-12">
         <label>Total Fiadas</label>
          <?php
          $query = "SELECT * FROM Cliente WHERE Pago='No' ORDER BY id DESC";
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
      <table class="table table-sm table-hover">
        <thead class="thead-light">
        <tr>
          <th>Pupusa</th>
          <th>Cantidad Vendida</th>
          <th>Total</th>
        </tr>
        </thead>
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
          <td>Chicharron</td>
          <td><?php echo $cCantidad ?></td>
          <td><?php echo $cTotal ?></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td style="background-color:#D4AC0D"><?php echo $totalGlobal ?></td>
        </tr>
      </table>
    </div>
  </div><br>
<!-------------------------------------------------------------------->
<div class="col-md-12">
        <label>Personas que deben</label><br>
          <table class="table table-sm table-hover">
            <tbody>
              <thead class="thead-light">
                <tr>
                  <th>Nombre</th>
                  <th>Debe</th>
                </tr>
              </thead>
          <?php
          $query = "SELECT * FROM Cliente WHERE Pago='No' ORDER BY id DESC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Total']; ?></td>
          </tr>
          <?php
          } 
        ?>
        </tbody>
        </table>
    </div>
    <div class="container"><a href="index.php" class="btn btn-warning">Volver</a></div>
</main>