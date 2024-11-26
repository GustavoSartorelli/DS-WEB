<?php
    // 1. Crie um array bidimensional para armazenar informações de vários produtos
    echo "<h4>ATIVIDADE 1</h4>";
    $produtos = [
        ["nome" => "Teclado", "preco" => 120.50, "estoque" => 15],
        ["nome" => "Mouse", "preco" => 80.00, "estoque" => 25],
        ["nome" => "Monitor", "preco" => 600.00, "estoque" => 10]
    ];

    // Exiba o nome e o preço de todos os produtos
    echo "<h4>Produtos:</h4>";
    foreach ($produtos as $produto) {
        echo "- " . $produto['nome'] . ": R$ " . number_format($produto['preco'], 2, ',', '.') . "<br>";
    }

    // 2. Calcule o valor total em estoque de todos os produtos
    echo "<h4>ATIVIDADE 2</h4>";
    $valorTotalEstoque = 0;
    foreach ($produtos as $produto) {
        $valorTotalEstoque += $produto['preco'] * $produto['estoque'];
    }

    echo "<br>Valor Total em Estoque: R$ " . number_format($valorTotalEstoque, 2, ',', '.') . "<br>";

    // 3. Tabela de Alunos e Notas
    echo "<h4>ATIVIDADE 3</h4>";
    $alunos = [
        ["nome" => "Bruno", "notas" => ["Matemática" => 5.5, "Português" => 8.0]],
        ["nome" => "Matheus", "notas" => ["Matemática" => 7.0, "Português" => 6.5]],
        ["nome" => "Gustavo", "notas" => ["Matemática" => 9.0, "Português" => 8.5]]
    ];

    // Exiba o nome de cada aluno e suas notas
    echo "<h4>Alunos e Notas:</h4>";
    foreach ($alunos as $aluno) {
        echo "- " . $aluno['nome'] . ":<br>";
        foreach ($aluno['notas'] as $disciplina => $nota) {
            echo "  $disciplina: " . number_format($nota, 1, ',', '.') . "<br>";
        }
    }

    // Calcule e exiba a média de cada aluno
    echo "<h4>Média de Cada Aluno:</h4>";
    foreach ($alunos as $aluno) {
        $media = array_sum($aluno['notas']) / count($aluno['notas']);
        echo "- " . $aluno['nome'] . ": " . number_format($media, 1, ',', '.') . "<br>";
    }
?>