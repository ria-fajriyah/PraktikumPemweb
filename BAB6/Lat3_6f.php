<?php
  session_start();
  session_destroy();
  setcookie('name','');
  setcookie('cd_order','');
  setcookie('dvd_order','');
  header("location:Lat3_6a.php");
?>  