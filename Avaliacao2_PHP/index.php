<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['login'] == 'fatec' and $_POST['senha'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Internauta';
         header("location: parametros_post_01.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<?php

require_once('dados_banco.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);

?>

 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{font: 20px sans-serif; text-align: center;}
        .wrapper{width: 350px; padding: 20px; background: rgb(176, 196, 222);}
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="login" class="form-control" value="fatec">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="senha" class="form-control" value="araras">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div> 
    </center>   
</body>
</html>