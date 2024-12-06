<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connection DB</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
        <form action="insertionCliente.php" method="POST">
            <h2>Clientes cadastrados: </h2>
            <label>Nome: </label>
            <input type="text" name="nome">
            <br>
            <label>Email: </label>
            <input type="text" name="email">
            <br>
            <input type="submit">
        </form>
        </div>

        <div class="content">
        <form action="insertionProduto.php" method="POST">
            <h2>Produtos cadastrados: </h2>
            <label>Nome: </label>
            <input type="text" name="nome">
            <br>
            <label>Valor: </label>
            <input type="number" step="0.01" name="valor">
            <br>
            <label>Estoque: </label>
            <input type="text" name="estoque">
            <br>
            <input type="submit">
        </form>
        </div>
    </div>
    <br><br><br>

    <?php
        session_start();
        include_once('connection.php');
        echo '<br>';
        echo '<h3>Produtos cadastrados: </h3>';
        $sql = "SELECT * FROM produto ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        // Verificar se há registros - PRODUTOS
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Preco: " . $linha['valor'] . " - Estoque: " . $linha['estoque'] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
        echo '<br>';
        echo '<h3>Clientes cadastrados: </h3>';
        $sql = "SELECT * FROM cliente ORDER BY nome ASC";
        $resultado = mysqli_query($conexao, $sql);

        // Verificar se há registros - CLIENTES
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . " - Email: " . $linha['email'] . "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    ?>
</body>
</html>