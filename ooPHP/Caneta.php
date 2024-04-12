<?php
class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    public $tampada;

    public function rabiscar(){
        // Para verificar um atributo dentro da própria classe, usa-se o $this 
        if($this->tampada == true){
            echo "<p>Erro! Não posso rabiscar!</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }

}