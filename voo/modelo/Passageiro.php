<?php

require_once("Passageiro.php");

class Passageiro extends Pessoa {

    private string $destino;
    private string $nomeAssento;
    private string $classe;
    private string $cliente;

    public function __toString()
    {
        $dados = sprintf("\nCliente %s %s, do voo %d que vai para %s na classe %s.", $this->cliente, $this->nome, $this->numVoo, $this->destino, $this->classe);
        return $dados;

    }

    /**
     * Get the value of destino
     */
    public function getDestino(): string
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     */
    public function setDestino(string $destino): self
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of nomeAssento
     */
    public function getNomeAssento(): string
    {
        return $this->nomeAssento;
    }

    /**
     * Set the value of nomeAssento
     */
    public function setNomeAssento(string $nomeAssento): self
    {
        $this->nomeAssento = $nomeAssento;

        return $this;
    }

    /**
     * Get the value of classe
     */
    public function getClasse(): string
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     */
    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of cliente
     */
    public function getCliente(): string
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     */
    public function setCliente(string $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

}