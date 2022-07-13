<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $qtd;
    public $calcvalor;
    public $valortotal;

    public function valorCalc(){
        $valor = $this->valor;
        $qtd = $this->qtd;
        $this->valortotal = $valor * $qtd;
    }
}
?>