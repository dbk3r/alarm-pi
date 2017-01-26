<?php
$pin = $_POST["mypin"];

if($pin == "1234") {
  setcookie("db-auth", "pin", time() + (3600), '/'); 
  print "OK";
}


 ?>
