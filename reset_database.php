<?php

include("db.php");

if(isset($_POST['reset_database'])) {
  //$id = $_GET['id'];
  $query = "DELETE FROM Cliente;";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Base de datos reiniciada';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

?>
