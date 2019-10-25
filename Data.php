<?php
Class Data {
private $guests;
private $sum_imc;

    public function __construct($guests, $sum_imc) {
    $this->sum_imc=$sum_imc;
    $this->guests=$guests;
    }
    public function getGuests() {
        return $this->guests;
    }
    public function getSum_imc() {
        return $this->sum_imc;
    }
    public function setSum_imc($sum_imc){
        $this->sum_imc = $sum_imc;
    }
    public function setGuests($guests){
        $this->guests = $guests;
    }
    public function CalculateData() {
        return ($this->sum_imc/$this->guests);
    }
    public function incrementaIMC($imc) {
        $this->sum_imc+=$imc;
        $this->guests++;
    }
}
?>