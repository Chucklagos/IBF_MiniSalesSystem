<?php
/*ATENCION, este es el precio para registrar compras debe ser cambiado
manualmente en el codigo hasta que se implemente la funcion que lo administre*/
$CantidadTotal = 0;

include('db.php');

if (isset($_POST['register_purchase'])) {
  $Nombre = $_POST['Nombre'];
  $C_Mixtas = $_POST['C_Mixtas'];
  $C_Quesillo = $_POST['C_Quesillo'];
  $C_Chicharron = $_POST['C_Chicharron'];
  $Pago = $_POST['Pago'];

  $CantidadTotal=$C_Chicharron+$C_Quesillo+$C_Mixtas;

  if ($CantidadTotal%2==0) {
    $Total = ($CantidadTotal/2)*35;
  } else if ($CantidadTotal==1) {
    $Total=18;
  } else {
    $Total=((($CantidadTotal-1)/2)*35)+18;
  }

  $query = "INSERT INTO Cliente VALUES (id,'$Nombre', '$C_Mixtas','$C_Quesillo','$C_Chicharron','$Total','$Pago')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Compra Registrada';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
