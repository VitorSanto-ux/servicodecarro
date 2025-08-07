<?php

require_once('Carro.php');
require_once('Cliente.php');
require_once('Produto.php');
require_once('Servico.php');

echo "<h2> Ficha do Carro <h2>";

$carro = new Carro();

$carro->marca = "Toyota" . "<br>";
$carro->cor = "Branco" . "<br>";
$carro->placa = "ABC1D23" . "<br>";
$carro->modelo = "Corolla" . "<br>";
$carro->anodefabricacao = "2021" . "<br>";

echo $carro->marca;
echo $carro->cor;
echo $carro->placa;
echo $carro->modelo;
echo $carro->anodefabricacao;
?>