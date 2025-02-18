<?php

class Pessoa{
    public $nome = "Gustavo";
    public $idade = "17";

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
    }
}
$Dados = new Pessoa();
$Dados->verDados();

class Funcionario extends Pessoa{

    public $salario = "123456789";

    public function verSalario(){
        echo $this->salario."<br>";
    }
}
$Salario = new Funcionario();
$Salario->verSalario();

class Gerente extends Funcionario{

    public function calcularBonus(){
        return "Gerente recebe 20% Desconto";
    }
}
$gerente = new Gerente();
echo $gerente->calcularBonus()."<br>";

class Desenvolvedor extends Funcionario{

   public function calcularbonus(){
        return "Desenvolvedor recebe 10% Desconto";
   }
}
$desenvolvedor = new Desenvolvedor();
echo $desenvolvedor->calcularBonus()."<br>";
?>