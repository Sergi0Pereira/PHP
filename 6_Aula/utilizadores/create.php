<?php
    if(isset($_POST['submit'])){ // perguntar o que acontece se nao for colocado
        include "../config/config.php";
        try{
            $sql = "INSERT into utilizadores (nome, apelido, email, palavra_passe) values (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $_POST["nome"], PDO::PARAM_STR);
            $stmt->bindParam(2, $_POST["apelido"], PDO::PARAM_STR);    
            $stmt->bindParam(3, $_POST["email"], PDO::PARAM_STR);    
            $stmt->bindParam(4, $_POST["palavra_passe"], PDO::PARAM_STR);        

            $stmt->execute();
            echo "Dados inseridos com sucesso.";
        }catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <h2>Inserir utilizador</h2>
    <form method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Insira o seu primeiro nome">
        <br><br>
        <label for="apelido">Apelido: </label>
        <input type="text" name="apelido" id="apelido" placeholder="Insira o seu apelido">
        <br><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" placeholder="Insira o seu e-mail">
        <br><br>
        <label for="pass">Palavra-passe: </label>
        <input type="password" name="palavra_passe" id="pass" placeholder="Insira uma palavra-passe">
        <br><br>
        <input type="submit" name="submit" value="Registar">
    </form>

</body>
</html>