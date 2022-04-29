<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <?php include"../config.php";
        try{
        $conn = new PDO(DSN, DB_USER,DB_PASS, CONFIG_OP);
        $sql ="SELECT * FROM utilizadores;";
        $stmt = $conn->query($sql);
        $users = $stmt->fetchAll();

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    ?>

    <h2>Lista de utilizadores</h2>
        <?php
            if($users != null){
                echo "Lista com registos.";
                echo "<table>";
                echo "<thead><tr><th>Nome</th><th>Apelido</th><th>E-mail</th></tr></thead>";
                echo "</tbody>";
                foreach($users as $user){
                    echo "<tr>";
                    echo "<td>" . $user["nome"] . "</td>";
                    echo "<td>" . $user["apelido"] . "</td>";
                    echo "<td>" . $user["email"] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else{
                echo "Não existem registos.";
            }
        ?>

</body>
</html>