<?php

require_once("Funcionario.php");

class Piloto extends Funcionario {

    private string $tipoDeLicenca;

    public function __toString()
    {
        $dados = sprintf("\nPiloto %s do voo %d, que pode voar %s, tem a licença %s.", $this->nome, $this->numVoo, $this->getAvioesPermitidos(), $this->tipoDeLicenca);
        return $dados;
        
    }

    /**
     * Get the value of avioesPermitidos
     */
    public function getAvioesPermitidos()
    {

        if ($this->tipoDeLicenca == "PP") {

            $dados = "Embraer e Cessna";

            return $dados;


        } 

        $dados = "Airbus e Boeing";

        return $dados;
        
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