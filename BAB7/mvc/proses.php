<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jabatan = $_POST['jabatan'];
    if($jabatan == "Menteri"){
        include_once("menteri.php");
        $login = new menteri($nama);
        $login->setNIM($nim);
        $login->setJabatan($jabatan);
        $login->invoke();
    }
    elseif ($jabatan == "Kepala Departemen") {
        include_once("kepalaDepartemen.php");
        $login = new kepalaDepartemen($nama);
        $login->setNIM($nim);
        $login->setJabatan($jabatan);
        $login->invoke();
    }
    else {
        header("location:formLogin.php");
    }
?>    