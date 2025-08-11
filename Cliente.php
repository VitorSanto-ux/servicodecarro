<?php

class Cliente{

    public $nome;
    public $sobrenome;
    public $idade;
    public $gereno;
    public $nascimento;
    public $email;
    public $endereco;
    public $cidade;
    public $estado;
    public $cep;


    public function SomarTotal($totalproduto, $totalservico) {
        return $soma = $totalproduto + $totalservico;
    }
}

?>