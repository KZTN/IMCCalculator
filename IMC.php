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
            return "Você está abaixo do peso";
        } elseif ($this->calcular() >= 18.5 && $this->calcular() <= 24.9) {
            return "Seu peso está normal";
        } elseif ($this->calcular() >= 25 && $this->calcular() < 29.9) {
            return "Você está com sobrepeso";
        } else {
            return "Você está obeso";
        }
    }
}