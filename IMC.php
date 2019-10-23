<?php

class IMC{
    protected $p;
    protected $a;

    public function __construct(float $p, float $a) {
        $this->peso = $p;
        $this->altura = $a;
    }

    public function calcular() : float {
        return $this->peso / $this->altura ** 2;
    }

    public function mensagem() : string {
        if ($this->calcular() <18.5) {
            return "Abaixo do peso";
        } elseif ($this->calcular() >= 18.5 && $this->calcular() <= 24.9) {
            return "Normal";
        } elseif ($this->calcular() >= 25 && $this->calcular() < 29.9) {
            return "Sobre peso";
        } else {
            return "Obesidade";
        }
    }
}