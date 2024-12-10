<?php
    session_start();
    session_unset();
    setcookie('login', $_SESSION['login'], -3600, "/");
    setcookie('senha', $_SESSION['senha'], -3600, "/");
    session_destroy();
    header('location: index1.php');
?>