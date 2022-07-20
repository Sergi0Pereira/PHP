<?php

    session_start(); // inicia a sessão do utilizador
    unset($_SESSION["email"]); // apaga a sessão do utilizador
    session_destroy(); // apaga a sessão do utilizador

    header("Location:Inicio.php"); // redireciona para a página inicial

?>