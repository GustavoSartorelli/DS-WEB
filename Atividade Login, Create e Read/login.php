<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login']) and isset($_POST['senha'])){
        include_once('connection.php');
        $login = $_POST["login"];
        $senha = $_POST["senha"];
    
        $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            $linha = mysqli_fetch_assoc($resultado);
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
        }
    }
    echo("<h4>Senha Correta!</h4>");
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        print_r ($_SESSION['login']);
        echo '<br>';
        print_r ($_SESSION['senha']);
    }else{
        header('Location: index1.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h4 {
            color: #343a40;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        a {
            text-decoration: none;
            display: block; /* Faz cada link ocupar uma linha */
            margin: 10px 0; /* Margem vertical entre os botões */
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 1em;
            width: 100%; /* Faz os botões ocuparem toda a largura do container */
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <br>
        <a href="logout.php"><button>Logout</a> <a href="cookie.php"><button>Salvar</a>
        <a href="index2.php"><button>Tabela de cadastro<button>
</body>
</html>

