<?php
  session_start();
  function factorial($number){
    if($number <= 1) return 1;
      $hasil = $number * factorial($number-1);
      return $hasil;
  }
  $number = $_POST["angka"];
  $hasil = factorial ($_POST["angka"]);
  $data = [$number, $hasil, "Nurul Fajriyah Al Maulidiyah", "205150201111035"];
  echo "<h3> Hasil Faktorial </h3>";
  echo "<p> $number! = $hasil </p>";
  $_SESSION["hasil akhir"] = $data;
  echo "<a href = Lat3_3c.php> Klik untuk melihat selanjutnya </a>";
?>