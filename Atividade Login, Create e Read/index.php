<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
    <style>
        .horizontal{
            display: flex;
            padding: 20px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="horizontal">
        <div>
            <h1>Login Autenticação: </h1>
            <form action="insertion.php" method="POST">
                <label>Nome: </label>
                <input type="text" name="nome">
                <br>
                <label>Email: </label>
                <input type="text" name="email">
                <br>
                <label>Senha: </label>
                <input type="text" name="senha">
                <br><br>
                <input type="submit">
            </form>
            <br><br><br>
            <?php
                include_once('connection.php');
                echo '<br>';
                $sql = "SELECT * FROM usuario ORDER BY nome ASC";
                $resultado = mysqli_query($conexao, $sql);
            ?>
        </div>
    </div>
</body>
</html>