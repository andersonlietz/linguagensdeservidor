<?php

/*
class Produto {
    public $valor = 10;
    public $nome = 'Pão';
}

$pao = new Produto;
$leite = new Produto;
$leite->nome = 'Leite'; // altera apenas para o objeto $leite

----------------//---------------

class Produto {
    public $valor = 10;
    public $nome = 'Pão';
    
    public function colocarEmPromocao(){
        $this->valor = $this->valor * 0.9;
    }
}

--------------------------//---------------------

class Produto {
    private $valor = 10;
    public $nome = 'Pão';
    
    public function pegarValor(){
        return $this->valor;
    }
    
    public function colocarEmPromocao(){
        $this->valor = $this->valor * 0.9;
    }
}
-------------------------//---------------//
*/
class Produto {
    private $valor;
    public $nome;
    
    public function __construct($n, $v) {
        $this->nome = $n;
        $this->valor = $v;
    }
    
    public function pegarValor(){
        return $this->valor;
    }
    
    public function colocarEmPromocao(){
        $this->valor = $this->valor * 0.9;
    }
}

$pao = new Produto('Pão', 10);
$leite = new Produto('Leite', 15);