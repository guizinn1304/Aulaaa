<?php

    namespace Model;

class Pedido 
{
    //Atributos
    private $codPedido;
    public $itens;
    public $quant;
    public $pag;    
    public $local;

    //metodos/ função
    public function __construct()
     {
        //Metodo que sera invocada toda vez que esta classe for instanciada

        echo $this->gerarCodigo();
        $this->gerarDataEhora();
    }
  
    private function gerarDataEhora()
    {
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br>Data e hora do pedido:<br> '; 
        echo date("d/m/y") . '<br>';
        echo date("H:i:s");
    }

    public function gerarCodigo()
    {
        $this->codPedido = random_int(100,300);
        return $this->codPedido;
    }
    public function gerarDesconto()
    {
        if($this->quant >= 5 && $this->local =='Bela Vista' || $this->local =='Aparecida' ){
            return "<h1 style= 'color: white; background-color: green'> 10% off </h1>";
        }
    }
}