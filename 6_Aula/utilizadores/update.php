<?php
include("../../6_Aula/config/config.php");

if (isset($_GET['id'])) {
    $id = $_GET["id"];

    try {

        $sql = "SELECT * FROM UTILIZADORES WHERE id= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch();
    } catch (PDOException $e) {

        echo $sql . "<br>" . $e->getMessage();
    }
}


if(isset($POST['submit'])){
    $nome=$_POST['nome'];
    $apelido=$_POST['apelido'];
    $email=$_POST['email'];
    $palavra_passe=$_POST['palavra_passe'];
}
try{
    $sql = "UPDATE UTILIZADORES SET nome=?, apelido=?, email=?, palavra_passe=? where id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $nome, PDO::PARAM_STR);
    $stmt->bindParam(2, $apelido, PDO::PARAM_STR);
    $stmt->bindParam(3, $email, PDO::PARAM_STR);
    $stmt->bindParam(4, $palavra_passe, PDO::PARAM_STR);  

    if($stmt->execute()){
        header("location:list.php");

    }else{
        echo "Erro!";
    }



}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
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
        <input type="text" name="nome" id="nome" value=<?php echo $user["nome"]; ?> >
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
        <input type="submit" name="submit" value="Registar">
    </form>


</body>

</html>