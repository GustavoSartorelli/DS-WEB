<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$usuarioCorreto = "aluno";
$senhaCorreta = "sesi";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login valido</title>
</head>
<body>
    <?php

    if($nome === $usuarioCorreto && $senha === $senhaCorreta){
        echo "<h3>O login foi Concluido!</h3>";


    }
    else{
        echo "<h3>Usuario ou senha incorretos</h3>";
    }
    
    ?>

<form action="index.php">
    <input type="submit" value= "voltar">
</form>

</body>
</html>