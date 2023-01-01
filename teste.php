<?php
// Conexão à base de dados
$conn = mysqli_connect("localhost", "username", "password", "database");

// Homepage
$sql = "SELECT * FROM aluno ORDER BY id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Apresentação pessoal do aluno
    while($row = mysqli_fetch_assoc($result)) {
        echo "Nome: " . $row["nome"]. " - Curso: " . $row["curso"]. "<br>";
    }
} else {
    echo "Sem resultados";
}

// Curso
$sql2 = "SELECT * FROM curso ORDER BY id";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // Descrição do curso a frequentar
    while($row = mysqli_fetch_assoc($result2)) {
        echo "Curso: " . $row["curso"]. " - Descrição: " . $row["descricao"]. "<br>";
    }
} else {
    echo "Sem resultados";
}

// Disciplinas
$sql3 = "SELECT * FROM disciplinas ORDER BY id";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    // Uma lista com algumas das disciplinas já frequentadas
    while($row = mysqli_fetch_assoc($result3)) {
        echo "Disciplina: " . $row["disciplina"]. " - Descrição: " . $row["descricao"]. "<br>";
    }
} else {
    echo "Sem resultados";
}

// Trabalhos 
$sql4 = "SELECT * FROM trabalhos ORDER BY id";
$result4 = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result4) > 0) {
    // Página com lista dos trabalhos efetuados
    while($row = mysqli_fetch_assoc($result4)) {
        echo "Trabalho: " . $row["trabalho"]. " - Descrição: " . $row["descricao"]. "<br>";
    }
} else {
    echo "Sem resultados";
}

// Contactos
// Formulário de contacto
echo '<form action="enviarMensagem.php" method="post">';
echo '<input type="text" name="nome" placeholder="Nome">';
echo '<input type="text" name="email" placeholder="Email">';
echo '<textarea name="mensagem" placeholder="Mensagem"></textarea>';
echo '<input type="submit" value="Enviar Mensagem">';
echo '</form>';

// Área administrativa
// Inserir dados numa base de dados MySQL
$sql5 = "INSERT INTO tabela (coluna1, coluna2, etc)
VALUES ('valor1', 'valor2', etc)";

if (mysqli_query($conn, $sql5)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

mysqli_close($conn);
