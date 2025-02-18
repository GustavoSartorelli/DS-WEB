<?php
abstract class Animal{
    public function fazerSom(){}
}

class Cachorro extends Animal{
    public function falar(){
        echo "Au-Au";
    }
    public function mover(){
        return "Anda de quatro patas";
    }
}

class Gato extends Animal{
    public function falar(){
        echo "Miau";
    }
    public function mover(){
        return "Anda de quatro patas";
    }
}

class Passaro extends Animal{
    public function falar(){
        echo "Piu-Piu"; 
    }

    public function mover(){
        return "Anda de duas patas";
    }
}
$snoop = new Cachorro();

echo $snoop->falar() . "<br/>";
echo $snoop->mover() . "<br/>";

echo "-------------------------<br/>";

$frajola = new Gato();

echo $frajola->falar() . "<br/>";
echo $frajola->mover() . "<br/>";

echo "-------------------------<br/>";

$zeCarioca = new Passaro();

echo $zeCarioca->falar() . "<br/>";
echo $zeCarioca->mover() . "<br/>";
?>