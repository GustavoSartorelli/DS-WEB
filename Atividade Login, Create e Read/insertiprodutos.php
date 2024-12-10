<?php
    // Incluo a minha conexão com o banco de dados
    include_once('connection.php');

    // Verifica se o formulário foi enviado
    if (isset($_POST)) {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];

        // Inicio a inserção dos dados do Banco
        $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
        if (mysqli_query($conexao, $sql)) {
            echo "Novo cadastro concluido!<br>";
            header('location: index2.php');
        }else{
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }
    ?>
