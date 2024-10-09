<?php

// + public (publico)
// - private (privado)
// # protected (protegido)

// class Caneta
// {
//     private $modelo;
//     private $cor;
//     private $ponta;
//     private $carga;
//     private $tampada;

//     public function __construct($m, $c, $p)
//     {
//         $this->modelo = $m;
//         $this->cor = $c;
//         $this->ponta = $p;
//         $this->tampar();
//     }

//     public function tampar()
//     {
//         $this->tampada = true;
//     }

//     public function getModelo()
//     {
//         return $this->modelo;
//     }

//     public function setModelo($m)
//     {
//         $this->modelo = $m;
//     }

//     public function getPonta()
//     {
//         return $this->ponta;
//     }

//     public function setPonta($p)
//     {
//         $this->ponta = $p;
//     }

// }

class Caneta
{
    public $modelo;
    private $ponta;
    
    public function getModelo()
    {   
        // Retorne o atributo modelo da classe Caneta
        return $this->modelo;
    }
    public function setModelo($m)
    {
        // Atribua o valor de $m ao atributo modelo da classe Caneta
        $this->modelo = $m;
    }
    public function getPonta()
    {
        // Retorne o atributo ponta da classe Caneta
        return $this->ponta;
    }
    public function setPonta($p)
    {
        // Atribua o valor de $p ao atributo ponta da classe Caneta
        $this->ponta = $p;
    }




}
