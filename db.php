<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'iglesia',
  'iglesia',
  'Pupusas_IBF'
) or die(mysqli_erro($mysqli));

?>
