<?php
    //Criando um Cookie
    setcookie("usuario", "gustavo", time() + 7*24*(60*60), '/');
    setcookie("usuarioAntigo", "gustavo", time() + 7*24*(60*60), '/');

    //Destruindo um Cookie
    setcookie("usuarioAntigo", "gustavo", -3600, '/');
    print_r($_COOKIE);
?>