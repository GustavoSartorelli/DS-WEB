<?php
abstract class produto {
    public $nome;
    public $preco;
    public $estoque;

    abstract function calculardesconto();  
}

class eletronico extends produto {
    public function calculardesconto() {
        if($this->estoque >= 5){
            return $this-> preco * 0.9;
        }
        else{
            return $this->preco * 0.9 * 0.9;
        }
    }
}

class roupa extends produto {
    public function calculardesconto(){
        if($this->estoque >= 5){
            return $this-> preco * 0.8;
        }else{
           return  $this->preco * 0.8 * 0.9;
        }
    }
}

$jaqueta = new roupa();
$jaqueta->preco = "180";
$jaqueta->estoque = "75";
$celular = new eletronico();
$celular->preco = "3000";
$celular->estoque = "10";

echo "<br>";

echo "Preço de 1 unidade de jaqueta: R$180" . "<br>";
echo "O preço sera de R$" . " " . $jaqueta->calculardesconto();
echo "<br><br>";

echo "-------------------------<br/>";

echo "<br>";
echo "Preço de 1 unidade de tv smart: R$3000" . "<br>";
echo "Seu preço sera de R$" . " " . $celular->calculardesconto();

?>