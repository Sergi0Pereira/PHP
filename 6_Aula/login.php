<?php

include "config.php";

try {
    if (isset($_POST["login"])) {

        if (empty($_POST['email']) || empty($_POST['palavra_passe'])) {
            $msg = "Todos os campos sao de preenchimento obrigatório.";
        } else {
            $sql = "SELECT * from Utilizadores where email = ? and palavra_passe = ?";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(1, $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(2, $_POST['palavra_passe'], PDO::PARAM_STR);

            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count == 1) {
                $_SESSION['email'] = $_POST['email'];

                if (isset($_SESSION["email"])) {
                    header("location:inicio.php");
                } else {
                    $message = "DADOS INCORRETOS";
                }
            }
        }
    }
} catch (PDOException $ex) {
    $msg = $ex->getMessage();
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
    if (isset($msg)) {
        echo "<label>" . $msg . '</label>';
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