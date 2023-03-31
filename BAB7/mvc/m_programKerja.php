<?php

require "koneksiMVC.php";

class m_programKerja{
    private $database;
    protected $tablename = "proker";
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();
    public function __construct(){
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }
    
    // Add Program Kerja
    public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $instance = new self();
        $this->nomorProgram = $nomorProgram;
        $this->namaProgram = $namaProgram;
        $this->suratKeterangan = $suratKeterangan;
        $this->database->query("INSERT INTO $this->tablename VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
    }

    // Edit Program Kerja
    public function updateProgramKerja($nomorProgram, $namaProgram, $suratKeterangan){
        $instance = new self();
        $this->database->query("UPDATE $this->tablename SET namaProgram = '$namaProgram', suratKeterangan = '$suratKeterangan' WHERE nomorProgram = '$nomorProgram'");
    }

    // Hapus Program Kerja
    public function deleteProgramKerja($nomorProgram){
        $this->database->query("DELETE FROM $this->tablename WHERE nomorProgram = $nomorProgram");
    }
        
    // Get All ProgramKerja
    public function getAll(){
        return $this->database->query("SELECT * FROM $this->tablename");
        $rows = array();
        while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}