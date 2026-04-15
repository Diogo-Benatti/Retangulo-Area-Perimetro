<?php

final class Retangulo
{
    public function __construct(
        private float $base,
        private float $altura
    ){}

    public function getBase(): float
    {
        return $this->base;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setBase(float $base): void
    {
        $this->base = $base;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro(): float
    {
        return 2 * ($this->base + $this->altura);
    }

    public function mostrarDados(): void
    {
        echo "Base: " . $this->base . PHP_EOL .
            "Altura: " . $this->altura . PHP_EOL .
            "Área: " . $this->calcularArea() . PHP_EOL .
            "Perímetro: " . $this->calcularPerimetro() . PHP_EOL;
    }
}
