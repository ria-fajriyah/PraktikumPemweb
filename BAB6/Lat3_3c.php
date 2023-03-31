<?php
  session_start();
  $key = $_SESSION["hasil akhir"];
  echo "Angka yang dimasukkan : $key[0] <br> 
        Hasil faktorial : $key[1] <br>
        Nama : $key[2] <br>
        NIM : $key[3]"; 
  session_destroy();
?>