<?php
Class Data {
private $guests;
private $sum_imc;
    private function __function() {
    }
    public function incrementaIMC($sum_imc, $guests) {
    $this->sum_imc+=$sum_imc;
    $this->guests=$guests;
    }
    public function getGuests() {
        return $this->guests;
    }
    public function getSum_imc($sum_imc) {
        $this->sum_imc = $sum_imc;
    }
    public function setGuests($guests) {
        $this->guests = $guests;
    }
    public function CalculateData() {
        return ($this->sum_imc/$this->guests);
    }
}
?>