<?php

namespace PhalconInit\IPD\Domain\Model;

class Kuisoner
{
    private $kuisonerId;
    private $kelas;
    private $dosen;
    private $mahasiswa;
    
    public function __construct(KuisonerId $kuisonerId, Kelas $kelas, Dosen $dosen, Mahasiswa $mahasiswa)
    {
        $this->kuisonerId = $kuisonerId;
        $this->kelas = $kelas;
        $this->dosen = $dosen;
        $this->mahasiswa = $mahasiswa;
    }
}