<?php

class Aviao{

    //Atributos:
    public $cor;
    public $marcaEmpresa;
    public $asas;
    public $modelo;
    public $turbina;

    //Método:
    public function cor(){
        return "A cor do avião é: ".$this->cor;
    }
    public function empresa(){
        return "A marca do avião é: ".$this->marcaEmpresa;
    }
    public function asas(){
        return "O avião tem duas: ".$this->asas ;
    }
    public function modelo(){
        return "O modelo do avião é: ".$this->modelo;
    }
    public function turbina(){
        return "O avião tem duas: ".$this->turbina;
    }
}

echo "Atributos AVIÃO:";
echo "<br> <br>";
$AviaoCor = new Aviao(); //Inicio do objeto
$AviaoCor->cor = "Azul"; //Atribuindo valor a um objeto
echo $AviaoCor->cor(); //Exibindo um atributo
echo "<br>";

$AviaoMarca = new Aviao();
$AviaoMarca->marcaEmpresa = "LATAM";
echo $AviaoMarca->empresa();
echo "<br>";

$AviaoAsas = new Aviao();
$AviaoAsas->asas = "asas";
echo $AviaoAsas->asas();
echo "<br>";

$AviaoModelo = new Aviao();
$AviaoModelo->modelo = "Irkut MC-21";
echo $AviaoModelo->modelo();
echo "<br>";

$AviaoTurbina = new Aviao();
$AviaoTurbina->turbina = "turbinas";
echo $AviaoTurbina->turbina();
echo "<br>";

class Moto{

    //Atributos:
    public $motor;
    public $marca;
    public $assento;
    public $retrovisor;
    public $preco;

    //Método:
    public function motor(){
        return "A moto tem um: ".$this->motor ."rapido";
    }
    public function marca(){
        return "A moto é da marca: ".$this->marca;
    }
    public function assento(){
        return "A moto tem um: ".$this->assento;
    }
    public function retrovisor(){
        return "A moto tem dois: ".$this->retrovisor;
    }
    public function preco(){
        return "O preço da moto é: ".$this->preco;
    }
}

echo "<br>";
echo "Atributos MOTO:";
echo "<br> <br>";
$MotoMotor = new Moto(); //Inicio do objeto
$MotoMotor->motor = "motor"; //Atribuindo valor a um objeto
echo $MotoMotor->motor(); //Exibindo um atributo
echo "<br>";

$MotoMarca = new Moto();
$MotoMarca->marca = "Ducati";
echo $MotoMarca->marca();
echo "<br>";

$MotoAssento = new Moto();
$MotoAssento->assento = "assento";
echo $MotoAssento->assento();
echo "<br>";

$MotoRetrovisor = new Moto();
$MotoRetrovisor->retrovisor = "retrovisores";
echo $MotoRetrovisor->retrovisor();
echo "<br>";

$MotoPreco = new Moto();
$MotoPreco->preco = "R$ 85.990,00";
echo $MotoPreco->preco();
echo "<br>";

class Projetor{

    //Atributos:
    public $espelhar;
    public $cor;
    public $modelo;
    public $controle;
    public $preco;

    //Método:
    public function espelhar(){
        return "O projetor tem a função de: ".$this->espelhar;
    }
    public function cor(){
        return "O projetor é de cor: ".$this->cor;
    }
    public function modelo(){
        return "O projetor é do model: ".$this->modelo;
    }
    public function controle(){
        return "O projetor tem um: ".$this->controle;
    }
    public function preco(){
        return "O projetor custa: ".$this->preco;
    }
}

echo "<br>";
echo "Atributos PROJETOR:";
echo "<br> <br>";
$ProjetorEspelhar = new Projetor(); //Inicio do objeto
$ProjetorEspelhar->espelhar = "espelhar"; //Atribuindo valor a um objeto
echo $ProjetorEspelhar->espelhar(); //Exibindo um atributo
echo "<br>";

$ProjetorCor = new Projetor();
$ProjetorCor->cor = "Branco";
echo $ProjetorCor->cor();
echo "<br>";

$ProjetorModelo = new Projetor();
$ProjetorModelo->modelo = "Benq Ms560";
echo $ProjetorModelo->modelo();
echo "<br>";

$ProjetorControle = new Projetor();
$ProjetorControle->controle = "controle";
echo $ProjetorControle->controle();
echo "<br>";

$ProjetorPreco = new Projetor();
$ProjetorPreco->preco = "R$ 2.600,00";
echo $ProjetorPreco->preco();
echo "<br>";

class FoneBluetooth{

    //Atributos:
    public $cor;
    public $fonte;
    public $modelo;
    public $marca;
    public $preco;

    //Método:
    public function cor(){
        return "O fone tem a cor: ".$this->cor;
    }
    public function fonte(){
        return "O fone tem uma: ".$this->fonte ."para carregar";
    }
    public function modelo(){
        return "O fone é do modelo: ".$this->modelo;
    }
    public function marca(){
        return "O fone é da marca: ".$this->marca;
    }
    public function preco(){
        return "O fone custa: ".$this->preco;
    }
}

echo "<br>";
echo "Atributos FONE BLUETOOTH:";
echo "<br> <br>";
$FoneCor = new FoneBluetooth(); //Inicio do objeto
$FoneCor->cor = "branca"; //Atribuindo valor a um objeto
echo $FoneCor->cor(); //Exibindo um atributo
echo "<br>";

$FoneFonte = new FoneBluetooth();
$FoneFonte->fonte = "Fonte";
echo $FoneFonte->fonte();
echo "<br>";

$FoneModelo = new FoneBluetooth();
$FoneModelo->modelo = "QCY-T13";
echo $FoneModelo->modelo();
echo "<br>";

$FoneMarca = new FoneBluetooth();
$FoneMarca->marca = "QCY";
echo $FoneMarca->marca();
echo "<br>";

$FonePreco = new FoneBluetooth();
$FonePreco->preco = "R$ 115,00";
echo $FonePreco->preco();
echo "<br>";

class WirelessMouse{

    //Atributos:
    public $cor;
    public $adaptador;
    public $led;
    public $scroll;
    public $sensor;

    //Método:
    public function cor(){
        return "O mouse tem a cor: ".$this->cor;
    }
    public function adaptador(){
        return "O mouse tem um: ".$this->adaptador;
    }
    public function led(){
        return "O mouse quando esta ligado liga o: ".$this->led;
    }
    public function scroll(){
        return "O mouse tem um: ".$this->scroll;
    }
    public function sensor(){
        return "O mouse tem um: ".$this->sensor;
    }
}

echo "<br>";
echo "Atributos WIRELESSMOUSE:";
echo "<br> <br>";
$MouseCor = new WirelessMouse(); //Inicio do objeto
$MouseCor->cor = "Preto"; //Atribuindo valor a um objeto
echo $MouseCor->cor(); //Exibindo um atributo
echo "<br>";

$MouseAdaptador = new WirelessMouse();
$MouseAdaptador->adaptador = "adaptador";
echo $MouseAdaptador->adaptador();
echo "<br>";

$MouseLed = new WirelessMouse();
$MouseLed->led = "led multicolor";
echo $MouseLed->led();
echo "<br>";

$MouseScroll = new WirelessMouse();
$MouseScroll->scroll = "scroll";
echo $MouseScroll->scroll();
echo "<br>";

$MouseSensor = new WirelessMouse();
$MouseSensor->sensor = "sensor";
echo $MouseSensor->sensor();
echo "<br>";

class ContaBanco{

    //Atributos:
    public $nome;
    public $numeroconta;
    public $saldo;

    //Método:
    public function nome(){
        return "O nome da conta é ".$this->nome;
    }
    public function depositar($deposito){
        $this->saldo += $deposito;
        return "Este é o novo saldo ".$this->saldo;
    }
    public function sacar($saque){
        $this->saldo -= $saque;
        return "Este é o novo saldo ".$this->saldo;
    }
    public function numeroconta(){
        return "O numero da conta é ".$this->numeroconta;
    }
    public function saldo(){
        return "O seu saldo é R$ ".$this->saldo;
    }
}

echo "<br>";
echo "Atributos CONTA BANCO:";
echo "<br> <br>";
$contaGustavo = new ContaBanco();
$contaGustavo->saldo = 5000 . ",00";
$contaGustavo->numeroconta ="Numero da conta:" . 12354684;
$contaGustavo->titular = "Nome Titular:" . "Gustavo Sartorelli";

echo $contaGustavo->titular . "<br>";
echo $contaGustavo->numeroconta . "<br>";
echo $contaGustavo->saldo(20);

?>