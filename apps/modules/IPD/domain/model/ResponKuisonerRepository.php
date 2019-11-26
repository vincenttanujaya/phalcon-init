<?php

namespace PhalconInit\IPD\Domain\Model;


interface ResponKuisonerRepository
{
    public function byDosen(Dosen $dosen);
    public function byMataKuliah(MataKuliah $mataKuliah);
    public function byKelas(MataKuliah $kelas);
    public function save(ResponKuisoner $ResponKuisoner);
}