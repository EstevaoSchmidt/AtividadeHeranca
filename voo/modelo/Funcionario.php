<?php

require_once("Pessoa.php");

class Funcionario extends Pessoa {

    protected int $tempoDeVoo;
    protected string $nomeCompania;
    protected int $salario;

    /**
     * Get the value of tempoDeVoo
     */
    public function getTempoDeVoo(): int
    {
            return $this->tempoDeVoo;
    }

    /**
     * Set the value of tempoDeVoo
     */
    public function setTempoDeVoo(int $tempoDeVoo): self
    {
            $this->tempoDeVoo = $tempoDeVoo;

            return $this;
    }

    /**
     * Get the value of nomeCompania
     */
    public function getNomeCompania(): string
    {
            return $this->nomeCompania;
    }

    /**
     * Set the value of nomeCompania
     */
    public function setNomeCompania(string $nomeCompania): self
    {
            $this->nomeCompania = $nomeCompania;

            return $this;
    }

    /**
     * Get the value of salario
     */
    public function getSalario(): int
    {
            return $this->salario;
    }

    /**
     * Set the value of salario
     */
    public function setSalario(int $salario): self
    {
            $this->salario = $salario;

            return $this;
    }

}