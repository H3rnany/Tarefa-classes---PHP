<?php
include ('Produtos.php');

class Vendas{
    public $produto;
    public $QtdVenda;
    public $valorUnic;
    public $valor;
    public $TipoVenda;
    
    

    public function calcular(){
        $valor = 0;
        for($i=0; $i<=2; $i++){
            $this->valor = $this->produto[$i]->valortotal + $this->valor;
        }
    }


    public function gerarProds(){
        $p1 = new Produtos();
        $p1->id = 1;
        $p1->nome = 'camisa do palmeiras';
        $p1->valor = 1000;
        $p1->qtd = 4;
        $p1->valorCalc();
        
        $p2 = new Produtos();
        $p2->id = 2;
        $p2->nome = 'Carlos';
        $p2->valor = 52;
        $p2->qtd = 4;
        $p2->valorCalc();

        $p3 = new Produtos();
        $p3->id = 3;
        $p3->nome = 'Banana';
        $p3->valor = 7;
        $p3->qtd = 5;
        $p3->valorCalc();

        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
        $this->produto[2] = $p3;
    }

    public function Imprimir(){

        echo '<table><tr>
        </tr>';

        for($i=0; $i<(count($this->produto)); $i++){
            echo '<tr><td></td><td>'.$this->produto[$i]->nome.'</td>';
            echo '<td>'.$this->produto[$i]->valor.'</td>';
            echo '<td>'.$this->produto[$i]->qtd.'</td>';
            echo '<td>'.$this->produto[$i]->valortotal.'</td>';

            
        }
        
        
    }

}


?>