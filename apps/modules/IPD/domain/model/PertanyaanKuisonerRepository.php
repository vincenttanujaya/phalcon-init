<?php

namespace PhalconInit\IPD\Domain\Model;

class PertanyaanKuisoner
{
    private $pertanyaanId;
    private $tipePertanyaan;
    private $pertanyaan;
    
    public function __construct(PertanyaanKuisonerId $pertanyaanId, $tipePertanyaan, $pertanyaan)
    {
        $this->pertanyaanId = $pertanyaanId;
        $this->tipePertanyaan = $tipePertanyaan;
        $this->pertanyaan = $pertanyaan;
    }
}