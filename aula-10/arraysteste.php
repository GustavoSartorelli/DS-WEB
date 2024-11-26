<?php

    // 1. Crie um array simples de frutas contendo pelo menos cinco itens.(foreach)
    echo "<h4>ATIVIDADE 1</h4>";
    $frutas = array('Maça', 'Banana', 'Melancia', 'Laranja', 'Melão');

    // Exiba o array atualizado
    foreach($frutas as $frutas1){
        echo $frutas1 . "<br>";
    }
    echo'<br>';

    // 2. Adicione um novo elemento ao array.
    echo "<h4>ATIVIDADE 2</h4>";
    array_push($frutas, 'Pera');

    // 3. Ordene o array em ordem alfabética.
    echo "<h4>ATIVIDADE 3</h4>";
    $frutas = array('Maça', 'Banana', 'Melancia', 'Laranja', 'Melão', 'Pera');
    sort($frutas);

    foreach($frutas as $frutas1){
    echo $frutas1 . "<br>";
    }
    
    // 4. Crie um array associativo para armazenar informações de um produto:
    echo "<h4>ATIVIDADE 4</h4>";
    $loja = array(
        "Maça" => array("Preço" => 3.50, "Estoque" => 20),
        "Banana" => array("Preço" => 3.00, "Estoque" => 15),
        "Melancia" => array("Preço" => 2.99, "Estoque" => 20),
        "Laranja" => array("Preço" => 2.00, "Estoque" => 15),
        "Melão" => array("Preço" => 3.00 , "Estoque" => 20),
        "Pera" => array("Preço" => 2.50 , "Estoque" => 15),
    );

    echo "<ul>";
    foreach ($loja as $nome => $detalhes) {
        echo "<li>";
        echo "Fruta: " . $nome . "<br>";
        echo "Preço: R$ " . number_format($detalhes["Preço"], 2, ',', '.') . "<br>";
        echo "Estoque: " . $detalhes["Estoque"] ."unidades" ."<br>";
        echo "</li><br>";
    }
    echo "</ul>";

    // 5. Atualize o preço do produto para um novo valor.
    echo "<h4>ATIVIDADE 5</h4>";
    $loja["Pera"]["Preço"] = 6.00; // Novo preço para da pera
    echo "Informações atualizadas da Pera: " . "<br>";
    echo "Fruta: Pera" . "<br>";
    echo "Preço: R$ " . number_format($loja["Pera"]["Preço"], 2, ',', '.') . "<br>";
    echo "Estoque: " . $loja["Pera"]["Estoque"] . " unidades" . "<br>";

    $loja = array(
        "Maça" => array("Preço" => 3.50, "Estoque" => 20),
        "Banana" => array("Preço" => 3.00, "Estoque" => 15),
        "Melancia" => array("Preço" => 2.99, "Estoque" => 20),
        "Laranja" => array("Preço" => 2.00, "Estoque" => 15),
        "Melão" => array("Preço" => 3.00 , "Estoque" => 20),
        "Pera" => array("Preço" => 6.50 , "Estoque" => 15),
    );

    echo "<ul>";
    foreach ($loja as $nome => $detalhes) {
        echo "<li>";
        echo "Fruta: " . $nome . "<br>";
        echo "Preço: R$ " . number_format($detalhes["Preço"], 2, ',', '.') . "<br>";
        echo "Estoque: " . $detalhes["Estoque"] ."unidades" ."<br>";
        echo "</li><br>";
    }
    echo "</ul>";

    // 6. Calcule a venda de 5 unidades do produto do array.
    echo "<h4>ATIVIDADE 6</h4>";
    $unidades = 5;
    $valor_total = $loja["Maça"]["Preço"] * $unidades;
    echo "Valor total da venda de $unidades unidades de Maçã: R$ " . number_format($valor_total, 2, ',', '.') . "<br><br>";

    // 7. Juntar dois arrays
    echo "<h4>ATIVIDADE 7</h4>";
    $nomes_frutas = ["Laranja", "Maça", "Banana"];
    $precos_frutas = [2.00, 3.50, 3.00];

    $array_associativo = array_combine($nomes_frutas, $precos_frutas);
    echo "Array associativo de produtos: " . "<br>";
    print_r($array_associativo);
    echo "<br><br>";

    // 8. Verifique se um elemento existe
    echo "<h4>ATIVIDADE 8</h4>";
    $cores = ["vermelho", "azul", "verde", "amarelo", "preto", "marrom"];
    $cor_procurada = "vermelho";

    if (in_array($cor_procurada, $cores)) {
        echo "A cor '$cor_procurada' está presente na tabela.<br><br>";
    } else {
        echo "A cor '$cor_procurada' não está presente na tabela.<br><br>";
    }

    // 9. Soma e média de valores
    echo "<h4>ATIVIDADE 9</h4>";
    $numeros = [3.50, 3.00, 2.99, 2.00, 3.00, 6.50];
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);

    echo "Soma dos números: $soma<br>";
    echo "Média dos números: " . number_format($media, 2, ',', '.') . "<br>";
?>