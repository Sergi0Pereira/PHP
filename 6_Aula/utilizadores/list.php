    <?php include "../config/config.php"; // Importar as constantes e a ligaçao criada
    try { // tentar receber dados da tabela utilizadores
        $sql = "SELECT * FROM utilizadores;"; // query a executar
        $stmt = $conn->query($sql); //esta variavel stmt é como carregar no raio do workbench
        $users = $stmt->fetchAll(); // recebe todos os dados que vem do comando executado
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="pt-PT">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>list</title>
    </head>

    <body>
        <h2>Lista de utilizadores</h2>
        <?php
        if ($users != null) { // Se a váriavel users nao estiver vazia
            echo "Lista com registos.";
            echo "<table>";
            echo "<thead><tr><th>Nome</th><th>Apelido</th><th>E-mail</th><th>Acçoes</th>";
            echo "</tbody>";
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user["nome"] . "</td>";
                echo "<td>" . $user["apelido"] . "</td>";
                echo "<td>" . $user["email"] . "</td>";
                echo "<td><a href='details.php?id=" .$user["id"] . "'>Ver</a><a href='update.php?id=" . $user["id"] ."'>Editar</a><a href='delete.php?id=" . $user["id"]."'>Apagar</a></td>";
                
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "Não existem registos.";
        }

        ?>

    </body>

    </html>