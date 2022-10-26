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
<?php

$nome = $_POST['nome_musica'];
$banda = $_POST['nome_banda'];
$tipo = $_POST['genero'];

function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['nome_musica']) and validar_post($_POST['nome_banda']) and validar_post($_POST['genero'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['nome_musica'];
    echo '<br><br>';
    echo 'Banda: '.$_POST['nome_banda'];
    echo '<br><br>';
    echo 'Gênero: '.$_POST['genero'];
    echo '<br><br>';

    /*
    Inserir os dados no banco de dados MySQL
    */

   require_once('dados_banco.php');

   // Criar Conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cadastro_musica (nome_musica, nome_banda, genero)
VALUES ('$nome', '$banda', '$tipo')";

if (mysqli_query($conn, $sql)) {
    echo "Novos dados criados com sucesso.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
</body>
</html>