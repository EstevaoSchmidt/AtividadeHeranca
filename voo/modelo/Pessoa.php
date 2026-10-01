<?php

class Pessoa {

    protected int $idade;
    protected string $cpf;
    protected string $nome;
    protected int $numVoo;
    protected int $horarioDeEmbarque;

    


    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of numVoo
     */
    public function getNumVoo(): int
    {
        return $this->numVoo;
    }

    /**
     * Set the value of numVoo
     */
    public function setNumVoo(int $numVoo): self
    {
        $this->numVoo = $numVoo;

        return $this;
    }

    /**
     * Get the value of horarioDeEmbarque
     */
    public function getHorarioDeEmbarque(): int
    {
        return $this->horarioDeEmbarque;
    }

    /**
     * Set the value of horarioDeEmbarque
     */
    public function setHorarioDeEmbarque(int $horarioDeEmbarque): self
    {
        $this->horarioDeEmbarque = $horarioDeEmbarque;

        return $this;
    }
    
}