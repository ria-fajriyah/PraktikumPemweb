<?php
include_once("m_programKerja.php");
    $e = $_POST['e'];
    if(isset($_GET['f'])){
        $s = $_GET['f'];
    }
    $controller = new m_programKerja();
    if (!empty($e)){
        $controller->updateProgramKerja
        ($_POST['namaProgram'],
        $_POST['suratKeterangan'],
        $_POST['nomorProgram']);
    }
    elseif (!empty($s)) {
        $controller->deleteProgramKerja
        ($_GET['nomorProgram']);
    }
    else{
        $controller->setProgramKerja
        ($_POST['nomorProgram'],
        $_POST['namaProgram'],
        $_POST['suratKeterangan']);
    }
header("location:index.php");
?>