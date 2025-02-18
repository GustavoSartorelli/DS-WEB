<?php

class Pessoa{
    public $nome;
    public $idade;

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
    }
}

class Funcionario extends Pessoa{
    public $salario;

    public function Salario(){
        $this->Salario = 50000;
        return $this->Salario;
    }
}

class Gerente extends Funcionario{
    public $bonusGerente;

    public function calcularBonusG(){
        $this->bonusGerente = $this->Salario * 1.2;
        return $this->bonusGerente;
    }
}
$Pessoa1 = new Gerente();
$nomeGerente = new Pessoa();
$nomeGerente->nome = "Bruno Campos";
$idadeGerente = new Pessoa();
$idadeGerente->idade = "81";

class Desenvolvedor extends Funcionario{
    public $bonusDesenvolvedor;
    public function calcularbonusD(){
        $this->bonusDesenvolvedor = $this->Salario * 1.1;
        return $this->bonusDesenvolvedor;
   }
}
$Pessoa2 = new Desenvolvedor();
$nomeDesenvol = new Pessoa();
$nomeDesenvol->nome = "Samuel Massmada";
$idadeDesenvol = new Pessoa();
$idadeDesenvol->idade = "19";

$Pessoa1->salario();
$Pessoa2->salario();

echo "Gerente" . "<br>";
echo $nomeGerente->nome."<br>";
echo $idadeGerente->idade."<br>";
echo "Seu salario é de " . "R$ " . $Pessoa1->calcularBonusG();
echo "<br>";
echo "<br>";
echo "Desenvolvedor" . "<br>";
echo $nomeDesenvol->nome."<br>";
echo $idadeDesenvol->idade."<br>";
echo "Seu salario é de " . "R$ " . $Pessoa2->calcularBonusD();
?>