<?php
$con = mysqli_connect("localhost","root","","secyear");

if (mysqli_connect_errno())
  {
  echo "MySQL'e bağlanılamadı: " . mysqli_connect_error();
  }
?>
