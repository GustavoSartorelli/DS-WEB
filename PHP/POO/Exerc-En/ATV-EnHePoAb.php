<?php

class Pessoa{

    public $nome = "Gustavo";
    protected $idade = "17";

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
    }
}

class Funcionario extends Pessoa{

    protected $salario = "1234";

    protected function verDados($n){
        echo $this->salario."<br>";
        $this->salario=$n;
    }
}


?>