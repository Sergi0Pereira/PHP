<?php
session_start();

if (isset($_SESSION['email'])) {
    echo "<h3>Login efetuado com sucesso, Olá " . $_SESSION["email"] . "</h3>";
    echo "<a href='logout.php'>Sair</a>";
} else {
    echo "<a href='login.php'>Entrar</a>";
}

?>


<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <ul>
        <li><a href="list.php">Listar utilizadores</a></li>
        <?php if (isset($_SESSION["email"])) {
            echo "<li><a href='create.php'>Criar utilizadores</a></li>";
        } ?>
    </ul>

</body>

</html>