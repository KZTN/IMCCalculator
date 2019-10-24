<?php
Class Data {
private $guests;
private $sum_imc;
    private function __function() {
    }
    public function incrementaIMC($imc) {
    $this->sum_imc+=$imc;
    $this->guests++;
    }
    public function getGuests() {
        return $this->guests;
    }
    public function getSum_imc() {
        return $this->sum_imc;
    }
    public function CalculateData() {
        return ($this->sum_imc/$this->guests);
    }
}
?>