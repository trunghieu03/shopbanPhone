<?php
$mysqli = new mysqli("localhost","root","","shopgiay");

// Check connection
if ($mysqli -> connect_errno) {
  echo "ket noi mysqli loi: " . $mysqli -> connect_error;
  exit();
}
?>