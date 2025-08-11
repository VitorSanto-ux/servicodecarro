<link rel="stylesheet" href="estilo.css">
<?php

require_once('Carro.php');
require_once('Cliente.php');
require_once('Produto.php');
require_once('Servico.php');

echo "<h2> Ficha do Carro: </h2>";

$carro = new Carro();

$carro->marca = "Toyota" . "<br>";
$carro->cor = "Branco" . "<br>";
$carro->placa = "ABC1D23" . "<br>";
$carro->modelo = "Corolla" . "<br>";
$carro->anodefabricacao = 2021 . "<br>";

echo "Marca: " . $carro->marca;
echo "Cor: " . $carro->cor;
echo "Plca: " . $carro->placa;
echo "Modelo: " . $carro->modelo;
echo "Ano de Fabricação: " . $carro->anodefabricacao;

echo "<h2> Ficha do Cliente: </h2>";

$cliente = new Cliente();

$cliente->nome = "Vitor";
$cliente->sobrenome = "Hugo" . "<br>";
$cliente->idade = 16 . "<br>";
$cliente->genero = "Masculino" . "<br>";
$cliente->nascimento = "08/10/2008" . "<br>";
$cliente->email = "vitor@gmail" . "<br>";
$cliente->endereco = "Barão do Rio Branco" . "<br>";
$cliente->cidade = "Paraguaçu Paulista" . "<br>";
$cliente->estado = "São Paulo" . "<br>";
$cliente->cep = 19700043 . "<br>";

echo "Nome e Sobrenome: " . $cliente->nome;
echo $cliente->sobrenome;
echo "Idade: " . $cliente->idade;
echo "Gênero: " . $cliente->genero;
echo "Data de Nascimento: " . $cliente->nascimento;
echo "E-mail: " . $cliente->email;
echo "Endereço: " . $cliente->endereco;
echo "Cidade: " . $cliente->cidade;
echo "Estado: ". $cliente->estado;
echo "CEP: " . $cliente->cep;

echo "<h2> Ficha do Produto: </h2>";

$produto = new Produto1();

$produto->nome = "Shampoo Automotivo Neutro Vonixx" . "<br>";
$produto->descricao = "Shampoo com pH neutro, ideal para lavagem segura sem remover ceras"  . "<br>";
$produto->preco = 29.90;
$produto->cor = "Azul claro"  . "<br>";
$produto->cod_barras = "7898570012345"  . "<br>";
$produto->categoria = "	Limpeza Externa"  . "<br>";
$produto->marca = "Vonixx"  . "<br>";
$produto->volumeouquantidade = "500ml"  . "<br>";
$produto->aplicacaofinalidade = "Limpeza de carro, especialmente indicado para pinturas enceradas."  . "<br>";
$produto->mododeuso = "Diluir 1:50 em água, aplicar com luva de microfibra e enxaguar."  . "<br>";

echo "Produto: " . $produto->nome;
echo "Descrição: " . $produto->descricao;
echo "Preço: " . $produto->preco . "<br>";
echo "Cor: " . $produto->cor;
echo "Código de Barra : " .$produto->cod_barras;
echo "Categoria: " . $produto->categoria;
echo "Marca: " . $produto->marca;
echo "Volume: " . $produto->volumeouquantidade;
echo "Aplicação: " . $produto->aplicacaofinalidade;
echo "Modo de uso: " . $produto->mododeuso;

$produto2 = new Produto2();

$produto2->nome = "Natura Wax Blend" . "<br>";
$produto2->descricao = "Cera híbrida de alta performance, composta por carnaúba e polímeros sintéticos. Proporciona brilho intenso, toque aveludado e proteção por até 4 meses. Ideal para todos os tipos de pintura automotiva. Fácil aplicação e remoção."  . "<br>";
$produto2->preco = 59.90;
$produto2->cor = "Amarelo claro"  . "<br>";
$produto2->cod_barras = "7898570015678"  . "<br>";
$produto2->categoria = "Cera Automotiva"  . "<br>";
$produto2->marca = "Vonixx"  . "<br>";
$produto2->volumeouquantidade = "200g"  . "<br>";
$produto2->aplicacaofinalidade = "Proteção e realce de brilho na pintura do veículo."  . "<br>";
$produto2->mododeuso = "Aplicar com aplicador de espuma sobre a superfície limpa e seca, deixar secar por alguns minutos e remover com pano de microfibra."  . "<br>";

echo "Nome: " . $produto2->nome;
echo "Descrição: " . $produto2->descricao;
echo "Preço: " . $produto2->preco . "<br>";
echo "Cor: " . $produto2->cor;
echo "Código de Barra: " . $produto2->cod_barras;
echo "Categoria: " . $produto2->categoria;
echo "Marca: " . $produto2->marca;
echo "Volume: " . $produto2->volumeouquantidade;
echo "Aplicação: " . $produto2->aplicacaofinalidade;
echo "Modo de uso: " . $produto2->mododeuso;

echo "<h2> Ficha do Serviço: </h2>";

$servico = new Servico();

$servico->nome = "Troca de Óleo Toyota Corolla 10W30 com Filtro" . "<br>";
$servico->descricao = "Troca de óleo lubrificante 10W30 com substituição do filtro de óleo, feita exclusivamente para veículos Toyota Corolla (todas as versões flex a partir de 2009). Garante desempenho ideal, proteção contra desgaste e manutenção da garantia de fábrica. Inclui descarte ambientalmente responsável." . "<br>";
$servico->duracao = "50 minutos" . "<br>";
$servico->preco = 189.90;
$servico->categoria = "Manutenção Preventiva" . "<br>";

echo "Nome do Serviço: " . $servico->nome;
echo "Descrição: " . $servico->descricao;
echo "Duração: " . $servico->duracao;
echo "Preço: " . $servico->preco . "<br>";
echo "Categoria: " . $servico->categoria;

echo "<h2> Soma do total: </h2>";

$somadosprodutos = $produto->preco + $produto2->preco;

echo "R$ " . $cliente->SomarTotal($somadosprodutos, $servico->preco);
?>