<?php

require_once("Funcionario.php");

class Piloto extends Funcionario {

    private string $avioesPermitidos;
    private string $tipoDeLicenca;

    public function __toString()
    {
        $dados = sprintf("O piloto %s do voo %d que pode voar %s que tem a licença %s", $this->nome, $this->numVoo, $this->avioesPermitidos, $this->tipoDeLicenca);
        return $dados;
        
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