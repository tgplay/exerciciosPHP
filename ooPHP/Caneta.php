<?php
class Caneta{
    // Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada == true){
            echo "<p>Erro! Não posso rabiscar! Caneta tampada.</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
        
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }

}