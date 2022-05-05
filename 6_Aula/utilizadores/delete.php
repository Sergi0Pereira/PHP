<?php
if (isset($_POST['id']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config/config.php";

    try {
        $sql = "delete  from utilizadores where id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $_POST["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("location: list.php"); // se correu bem  reencaminho a pessoa para a página de listagem
        } else {
            echo "O statement nao executou devidamente.";
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
    <p>Estás prestes a eliminar um utilizador.</p>

    <form method="POST">
        <p>Tem a certeza que quer eliminar o utilizador?</p>
        <p>
            <input type="submit" value="Eliminar">
            <a href="list.php">Nao</a>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        </p>
    </form>

</body>

</html>