<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style> 
        .primeira-div{
            background-color: silver;
            border: solid 2px;
            margin: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="primeira-div">
    <form action="login.php" method="post">
   
    <h2>Sistema de login</h2>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required placeholder="usuario"><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required placeholder="senha"><br>
        <input type="submit" value="ENVIAR">
    </form>
    </div>
</body>
</html>