<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$logado = $_SESSION["loggedin"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
    <form action="parametros_post_02.php" method="post">
        <label for="nome_musica">Nome da Musica:</label>
        <input type="text" id="nome_musica" name="nome_musica"><br><br>
        <label for="nome_banda">Banda:</label>
        <input type="text" id="nome_banda" name="nome_banda"><br><br>
        <label for="nome_banda">Gênero:</label>
        <input type="text" id="genero" name="genero"><br><br>
        <input type="submit" value="Enviar">
        <div class="form-group">
        <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>  
        <a href="cadastro_musica.sql" class="btn btn-primary">Consultar Músicas Cadastradas</a>
        <br><br>      
    </form> 
</body>
</html>
