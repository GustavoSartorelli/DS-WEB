<?php

class Aviao{

    //Atributos:
    public $cor;
    public $marcaEmpresa;
    public $asas;
    public $modelo;
    public $turbina;

    //Metodo:
    public function falar(){
        return "A cor do avião é ".$this->cor;
    }
    public function falar(){
        return "A marca do avião é ".$this->marcaEmpresa;
    }
    public function falar(){
        return "As ".$this->Asas " do avião estão otimas";
    }
}

$AviaoCor = new Aviao();
$AviaoCor->cor = "Azul";
echo $AviaoCor->falar();

$AviaoMarca = new Aviao();
$AviaoMarca->marcaEmpresa = "LATAM";
echo $AviaoMarca->falar();

$AviaoAsas = new Aviao();
$AviaoAsas->asas = "asas";
echo $AviaoAsas->falar();

?>