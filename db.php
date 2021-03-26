<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'iglesia',
  'iglesia',
  'pupusas'
) or die(mysqli_erro($mysqli));

?>
