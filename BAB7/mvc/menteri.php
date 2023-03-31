<?php
include "pengurusBEM.php";
include_once("m_programKerja.php");
    class menteri extends pengurusBEM {
        public function __construct($nama) {
        $this->nama = $nama;
        $this->model = new m_programKerja();
        }
        function setJabatan($jabatan) {
            $this->jabatan = $jabatan;
        }
        public function getJabatan() {
            echo "$this->jabatan";
        }
        public function invoke() {
            $proker = $this->model->getAll('proker');
            $jabatan = $this->jabatan;
            include "v2_programKerja.php";
        }
            
    }
?>