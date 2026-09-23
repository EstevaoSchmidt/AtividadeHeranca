<?php

class Comissario extends Funcionario {

    private string $servico;
    private string $avaliacao;
    private string $tipoVoo;

    /**
     * Get the value of servico
     */
    public function getServico(): string
    {
        return $this->servico;
    }

    /**
     * Set the value of servico
     */
    public function setServico(string $servico): self
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */
    public function getAvaliacao(): string
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     */
    public function setAvaliacao(string $avaliacao): self
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    /**
     * Get the value of tipoVoo
     */
    public function getTipoVoo(): string
    {
        return $this->tipoVoo;
    }

    /**
     * Set the value of tipoVoo
     */
    public function setTipoVoo(string $tipoVoo): self
    {
        $this->tipoVoo = $tipoVoo;

        return $this;
    }

}