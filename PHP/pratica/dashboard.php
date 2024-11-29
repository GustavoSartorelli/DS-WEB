<?php
    session_start();
    $loginCerto = 'gustavo';
    $senhaCerto = '123';

    //verifica se veio do Formulario
    if(isset($_POST['login'])){
        //verifica se o login esta correto
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];
        }
    }

    echo("<h4>Senha Correta!</h4>");
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        print_r ($_SESSION['login']);
        echo '<br>';
        print_r ($_SESSION['senha']);
    }else{
        header('Location: index.php');
    }

?>
    <br>
        <a href="logout.php"><button>Logout</a> <a href="cookie.php"><button>Salvar</a>
</body>
</html>