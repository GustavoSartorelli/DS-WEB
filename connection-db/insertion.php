<?php
//Incluo a minha conexão com o banco de dados
include_once('connection.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Inicio a inserção dos dados do Banco
$sql = "INSERT INTO funcionario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>