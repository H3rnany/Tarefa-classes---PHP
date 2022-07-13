<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    


<?php

include ('Vendas.php');


$v1 = new Vendas();
$v1->QtdVenda = 1;
$v1->TipoVenda = 0;
$v1->gerarProds();
$v1->calcular();

$v2 = new Vendas();
$v2->QtdVenda = 2;
$v2->TipoVenda = 2;
$v2->gerarProds();
$v2->calcular();

$v3 = new Vendas();
$v3->QtdVenda = 3;
$v3->TipoVenda = 0;
$v3->gerarProds();
$v3->calcular();

$v4 = new Vendas();
$v4->QtdVenda = 4;
$v4->TipoVenda = 1;
$v4->gerarProds();
$v4->calcular();

$v5 = new Vendas();
$v5->QtdVenda = 5;
$v5->TipoVenda = 1;
$v5->gerarProds();
$v5->calcular();

$vendas = [];
$vendas[0] = $v1;
$vendas[1] = $v2;
$vendas[2] = $v3;
$vendas[3] = $v4;
$vendas[4] = $v5;


$A = [];
$V = [];
$P = [];

for($x=0; $x<5; $x++){
    $t = $vendas[$x]->TipoVenda;

    if($t == 0){
        array_push($A, $vendas[$x]);
    }

    if($t == 1){
        array_push($V, $vendas[$x]);
    }

    if($t == 2){
        array_push($P, $vendas[$x]);
    }
}

function Dados($vetor){
    for($j=0; $j<(count($vetor)); $j++){

        $vetor[$j]->Imprimir();
    }
}


echo '<h2>Vendas feitas a prazo</h2>';
Dados($A);
echo '<hr>';
echo '<br>';

echo '<h2>Vendas feitas a vista</h2>';
Dados($V);
echo '<hr>';
echo '<br>';

echo '<h2>Vendas pagas a prazo<h2>';
Dados($P);
echo '<hr>';
echo '<br>';


//echo '<h1>Valor Total: '.$v1->valor.'</h1><br><hr>';

?>

</body>
</html>