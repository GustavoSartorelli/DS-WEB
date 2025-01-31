<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 1em;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .registro {
            background-color: #ffffff;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .registro h3 {
            margin: 0;
            color: #495057;
        }

        .registro p {
            margin: 5px 0;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div>
    <h1>Cadastro Usuario: </h1>
    <form action="insertiusuario.php" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome">
        <br>

        <label>Email: </label>
        <input type="text" name="email">
        <br>

        <label>Senha: </label>
        <input type="text" name="senha">
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <br><br><br>

    <?php
        include_once('connection.php');
        echo '<br>';
        $sql = "SELECT * FROM usuario ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . " - Senha: " . $linha['senha'] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    ?>
</div>

    <h1>Formulário de Produtos:</h1>
    <form action="insertiprodutos.php" method="POST">
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

    <?php   
        session_start();
        include_once('connection.php');
        echo '<br>';
        echo '<h3>Produtos cadastrados: </h3>';
        $sql = "SELECT * FROM produtos ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Descrição: " . $linha['descricao'] . " - Preço: " . $linha['preco'] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    ?>
</body>
</html>