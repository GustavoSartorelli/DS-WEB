<?php
    // Incluo a minha conexão com o banco de dados
    include_once('connection.php');

    // Verifica se o formulário foi enviado
    if (isset($_POST)) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Inicio a inserção dos dados do Banco
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
            echo "Novo cadastro concluido!<br>";
            header('location: index2.php');
        }else{
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }
    ?>