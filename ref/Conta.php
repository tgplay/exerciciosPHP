<?php

class Conta
{
    private $cpfTitula;
    private $nomeTitular;
    private $saldo = 0;
    
    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }        
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Precisa ser um valor positivo";
            return;
        } 
        $this->saldo += $valorADepositar;
    }

    public function transfere (float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitula = $cpf;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
}