
<?php
    include ("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION["id_alterado"])){
        $id = $_SESSION["id_alterado"];
        $sql_mensagens = "SELECT * FROM mensagem WHERE id_mensagem = $id";
        $retorno_mensagens = $mysqli->query($sql_mensagens) or die($mysqli->error);
        $mensagem = $retorno_mensagens -> fetch_assoc();

        echo "<h1> Dados Recebidos:</h1>";
        echo "<p> O nome recebido foi: " . $mensagem["nome"] . "</p>";
        echo "<p> O email recebido foi: " .$mensagem["email"] ."</p>";
    }


    
    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>Document</title>
    </head>
    <body>
        <a href="central_mensagem.php">Voltar</a>
    </body>
</html>  