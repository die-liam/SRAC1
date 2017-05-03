<?php 
  session_start();
  unset($_SESSION["usuario"]);
  unset($_SESSION["numRegidor"]); 
  session_destroy();
  header("Location: ../index");
  exit;
?>