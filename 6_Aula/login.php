<?php

include "config.php";

try {
    if (isset($_POST["login"])) { // se o botão de login foi clicado

        if (empty($_POST['email']) || empty($_POST['palavra_passe'])) { // se o campo de email ou palavra passe estiver vazio
            $msg = "Todos os campos sao de preenchimento obrigatório.";
        } else {
            $sql = "SELECT * from Utilizadores where email = ? and palavra_passe = ?";
            $stmt = $conn->prepare($sql); // prepara a query. $conn = conexão com o banco de dados $sql = query a ser executada

            $stmt->bindParam(1, $_POST['email'], PDO::PARAM_STR); // bindParam = vincula o valor do parametro ao seu respectivo valor na query. 1 = o primeiro parametro da query. $_POST['email'] = o valor do campo de email. PDO::PARAM_STR = o tipo de dado do parametro.
            $stmt->bindParam(2, $_POST['palavra_passe'], PDO::PARAM_STR);

            $stmt->execute(); 

            $count = $stmt->rowCount(); // rowCount = conta o numero de linhas que a query retornou. Se o numero de linhas for igual a 1, quer dizer que o utilizador existe.

            if ($count == 1) {
                $_SESSION['email'] = $_POST['email']; // inicia a sessão do utilizador. $_SESSION = sessão do utilizador. $_POST['email'] = o valor do campo de email.
                
                
                } else {
                    $message = "DADOS INCORRETOS"; // se o utilizador não existir, o utilizador é informado que os dados estão incorretos.
                    echo $message;
                }
            if (isset($_SESSION["email"])) { // se a sessão do utilizador estiver iniciada
                header("location:inicio.php"); // redireciona para a página inicial
            }
        }
    }
} catch (PDOException $ex) { // se ocorrer algum erro na conexão com o banco de dados
    $msg = $ex->getMessage(); // $msg = mensagem de erro. $ex = exceção. getMessage = pega a mensagem de erro.
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Login</title>
</head>

<body>
    <h1>Efectuar Login</h1>
    <?php
    if (isset($msg)) { // se a variável $msg existir
        echo "<label>" . $msg . '</label>'; // imprime a mensagem de erro
    }
    ?>
    <form method="post">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" />
        <br><br>
        <label>Palavra-passe:</label>
        <input type="password" name="palavra_passe" placeholder="Password">
        <br><br>
        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>