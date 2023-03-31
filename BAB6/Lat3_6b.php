<?php
session_start();
  if(isset ($_POST['username']) && isset ($_POST['password'])) {  
  $_SESSION ["username"] = $_POST["username"];
  $_SESSION ["password"] = $_POST["password"];
  $username = "admin"; $password = "admin";
  
  if($_SESSION["username"]==$username && $_SESSION["password"]==$password){
      echo "<p>Login berhasil </p></br>";
      echo "<a href = Lat3_6c.php> Klik untuk melanjutkan </a>";
  } else {
      echo "Maaf, username atau password salah";
  } 
  } 
 ?> 