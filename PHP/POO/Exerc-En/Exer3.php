<?php

class Veiculo{
    public $marca;
    public $modelo;
    private $velocidade;
}

public function GetDefinir(){
    return "A">$this->marca . "foi escolhida!";
}
public function SetExibirVelocidade(){
    return "A">$this->marca . "foi escolhida!";
}

class Carro extends Veiculo{
    public function acelerar(){
        echo "Pedal Acelerador";
    }
}
class Moto extends Veiculo{
    public function acelerar(){
        echo "manete acelerador";
    }
}

$Ferrari = new carro();
$Ferrari->marca = "Ferrari";
$Ferrari->modelo = "Ferrari 296";
$Ferrari->velocidade = "330 km/h";

echo $Ferrari->acelerar();
echo $Ferrari->marca . "<br>";
echo $Ferrari->modelo . "<br>";
echo $Ferrari->velocidade . "<br>";

echo "-------------------------<br/>";

$Ninja = new carro();
$Ninja->marca = "Ninja";
$Ninja->modelo = "Kawasaki Ninja 300";
$Ninja->velocidade = "170 km/h";

echo $Ninja->acelerar();
echo $Ninja->marca . "<br>";
echo $Ninja->modelo . "<br>";
echo $Ninja->velocidade . "<br>";
?>