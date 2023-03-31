<?php

class pengurusBEM {

   public $nama;
   public $nim;
   public $angkatan;
   private $jabatan;
   private $foto;

   public function setNama($nama) { 
      $this->nama = $nama;
   }

   public function getNama() {
      echo "$this->nama";
   }

   public function setNIM($nim) { 
    $this->nim = $nim;
    }

    public function getNIM() {
        echo "$this->nim";
    }

   private function setJabatan($jabatan) {    
      $this->jabatan = $jabatan;
   }
  
   public function getJabatan() {
      echo "$this->jabatan";
   }
}
