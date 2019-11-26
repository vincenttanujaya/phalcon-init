<?php

namespace PhalconInit\IPD\Domain\Model;

class ResponKuisoner
{
    private $pertanyaanKuisoner;
    private $kelas;
    private $dosen;
    private $mahasiswa;
    private $kuisoner;
    
    public function __construct(PertanyaanKuisoner $pertanyaanKuisoner, Kelas $kelas, Dosen $dosen, Mahasiswa $mahasiswa, Kuisoner $kuisoner)
    {
        $this->pertanyaanKuisoner = $pertanyaanKuisoner;
        $this->kelas = $kelas;
        $this->dosen = $dosen;
        $this->mahasiswa = $mahasiswa;
        $this->kuisoner = $kuisoner;
    }
}