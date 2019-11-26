<?php

namespace PhalconInit\IPD\Domain\Model;

class Kuisoner
{
    private $jawabanId;
    private $pertanyaan;
    private $jawaban;
    private $bobot;
    
    public function __construct(JawabanId $jawabanId, PertanyaanKuisoner $pertanyaan, $jawaban, $bobot)
    {
        $this->jawabanId = $jawabanId;
        $this->pertanyaan = $pertanyaan;
        $this->jawaban = $jawaban;
        $this->bobot = $bobot;
    }
}