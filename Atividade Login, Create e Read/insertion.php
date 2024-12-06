<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    // Incluo a minha conexão com o banco de dados
    include_once('connection.php');

    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Inicio a inserção dos dados do Banco
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        
        // Executa a consulta
        if (mysqli_query($conexao, $sql)) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
    }
    ?>

    <h1>Formulário de Produtos:</h1>
    <form action="index.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Descrição:</label>
        <input type="text" name="descricao" required>
        <br>
        <label>Preço:</label>
        <input type="text" name="preco" required>
        <br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br><br><br>
    <div class="horizontal">
        <div>
            <?php
                echo '<br>';
                $sql = "SELECT * FROM produtos ORDER BY nome ASC";
                $resultado = mysqli_query($conexao, $sql);

                // Verificar se há registros
                if (mysqli_num_rows($resultado) > 0) {
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Descrição: " . $linha['descricao'] . " - Preço: " . $linha['preco'] . "<br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }
            ?>
        </div>
    </div>
</body>
</html>