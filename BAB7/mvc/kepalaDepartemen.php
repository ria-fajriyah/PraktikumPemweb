<?php
include "pengurusBEM.php";
include_once("m_programKerja.php");
    class kepalaDepartemen extends pengurusBEM {
    public $model;
    public function __construct($nama){
        $this->nama = $nama;
        $this->model = new m_programKerja();
    }
    public function getNama() {
        echo "$this->nama";
    }
    function setJabatan($jabatan) { 
        $this->jabatan = $jabatan;
    }
    public function getJabatan() {
        echo "$this->jabatan";
    }
    public function invoke() {
        $proker = $this->model->getAll();
        $jabatan = $this->jabatan;
        include "v_programKerja.php";
    }
}
?>