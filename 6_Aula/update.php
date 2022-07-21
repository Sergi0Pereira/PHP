<?php
include("../../6_Aula/config/config.php");

if (isset($_GET['id'])) { // se a variável $_GET['id'] existir e não estiver vazia (se o utilizador clicar no botão de apagar
    $id = $_GET["id"]; // $id = o valor da variável $_GET['id']

    try {

        $sql = "SELECT * FROM UTILIZADORES WHERE id= ?";
        $stmt = $conn->prepare($sql); // prepara a query para ser executada no bd 
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute(); // executa a query $sql
        $user = $stmt->fetch(); // $user = o resultado da query (o utilizador) que foi executada. fetch = pega o resultado da query.
    } catch (PDOException $e) {

        echo $sql . "<br>" . $e->getMessage();
    }
}

if (isset($_POST["submit"])) { // se o botão de submit foi clicado e não estiver vazio 
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $palavra_passe = $_POST['palavra_passe'];



try {
    $sql = "UPDATE UTILIZADORES SET nome=?, apelido=?, email=?, palavra_passe=? where id=" . $id;
    $stmt = $conn->prepare($sql); // prepara a query. $conn = conexão com o banco de dados $sql = query a ser executada
    $stmt->bindParam(1, $nome, PDO::PARAM_STR);
    $stmt->bindParam(2, $apelido, PDO::PARAM_STR);
    $stmt->bindParam(3, $email, PDO::PARAM_STR);
    $stmt->bindParam(4, $palavra_passe, PDO::PARAM_STR);

        echo "Dados modificados com sucesso.";

        if ($stmt->execute()) {
        header("location:list.php");
        } else {
        echo "Erro!";
        }

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <H1>Atualizar utilizador <?php echo $user["nome"]; ?></H1>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" value=<?php echo $user["nome"]; ?>>
        <br><br>
        <label for="apelido">Apelido: </label>
        <input type="text" name="apelido" id="apelido" value=<?php echo $user["apelido"]; ?>>
        <br><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" value=<?php echo $user["email"]; ?>>
        <br><br>
        <label for="psw">Palavra-passe: </label>
        <input type="password" name="pass" id="pass" value=<?php echo $user["palavra_passe"]; ?>>
        <br><br>
        <input type="submit" name="submit" value="Atualizar">
    </form>


</body>

</html>