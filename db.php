<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'flash54321',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
