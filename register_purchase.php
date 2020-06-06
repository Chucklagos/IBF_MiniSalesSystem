<?php

include('db.php');

if (isset($_POST['register_purchase'])) {
  $Nombre = $_POST['Nombre'];
  $C_Mixtas = $_POST['C_Mixtas'];
  $C_Quesillo = $_POST['C_Quesillo'];
  $C_Chicharron = $_POST['C_Chicharron'];
  $Total = ($C_Chicharron+$C_Quesillo+$C_Mixtas)*15;
  $query = "INSERT INTO Cliente VALUES (id,'$Nombre', '$C_Mixtas','$C_Quesillo','$C_Chicharron','$Total')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Compra Registrada';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
