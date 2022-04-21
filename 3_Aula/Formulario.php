<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <h1>Formularios</h1>

    <form method="POST" action="action.php">
        <label> Nome: </label>
        <input type="text" name="nome">
        <br><br>
        <label> Email: </label>
        <input type="text" name="email">
        <br><br>
        <label> Website </label>
        <input type="text" name="website">
        <br><br>
        <label> Genero: </label>
        <input type="radio" checked value="Masculino" name="genero"> <label>Masculino</label> <!-- checked seleciona o campo por predefiniçao e value= atribui um valor senao so temos o status do radio como on-->
        <input type="radio" name="genero" value="Feminino"> <label>Feminino</label>
        <br><br>
        <label> Comentário:</label>
        <br><br>
        <textarea name="comentario" cols="" rows="5"autofocus ></textarea> ></textarea>
        <!-- text area criar um campo de texto. Cols =>Specifies the visible width of a text area rows=>Specifies the visible number of lines in a text area-->
        <br><br>
        <input value="Submeter" type="submit">
    </form>


</body>

</html>