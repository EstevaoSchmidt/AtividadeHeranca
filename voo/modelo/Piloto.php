<?php

require_once("Funcionario.php");

class Piloto extends Funcionario {

    private int $TotalHorasVoo;
    private string $avioesPermitidos;
    private string $tipoDeLicenca;

    /**
     * Get the value of TotalHorasVoo
     */
    public function getTotalHorasVoo(): int
    {
        return $this->TotalHorasVoo;
    }

    /**
     * Set the value of TotalHorasVoo
     */
    public function setTotalHorasVoo(int $TotalHorasVoo): self
    {
        $this->TotalHorasVoo = $TotalHorasVoo;

        return $this;
    }

    /**
     * Get the value of avioesPermitidos
     */
    public function getAvioesPermitidos(): string
    {
        return $this->avioesPermitidos;
    }

    /**
     * Set the value of avioesPermitidos
     */
    public function setAvioesPermitidos(string $avioesPermitidos): self
    {
        $this->avioesPermitidos = $avioesPermitidos;

        return $this;
    }

    /**
     * Get the value of tipoDeLicenca
     */
    public function getTipoDeLicenca(): string
    {
        return $this->tipoDeLicenca;
    }

    /**
     * Set the value of tipoDeLicenca
     */
    public function setTipoDeLicenca(string $tipoDeLicenca): self
    {
        $this->tipoDeLicenca = $tipoDeLicenca;

        return $this;
    }

}