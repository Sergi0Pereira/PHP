<?php

include "../config/config.php";

try {

    $sql = "SELECT * FROM UTILIZADORES WHERE ID= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();
} catch (PDOException $e) {

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
    <div>
        <p>
            <label>Id:</label>
            <?php echo $user["id"]; ?>
        </p>
    </div>

    <div>
        <p>
            <label>Nome:</label>
            <?php echo $user["nome"]; ?>
        </p>
    </div>
    <div>
        <p>
            <label>Apelido:</label>
            <?php echo $user["apelido"]; ?>
        </p>
    </div>
    <div>
        <p>
            <label>Email:</label>
            <?php echo $user["email"]; ?>
        </p>
    </div>


</body>

</html>