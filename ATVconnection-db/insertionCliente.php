<?php
    //Incluo a minha conexão com o banco de dados
    include_once('connection.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    //Inicio a inserção dos dados do Banco
    $sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";

    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!";
        header('Location: index.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>