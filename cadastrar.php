
<?php
include ("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

   echo "<h1> Dados Recebidos:</h1>";
   echo "<p> O nome recebido foi: " .$nome . "</p>";
   echo "<p> O email recebido foi: " .$email . "</p>";
   echo "<p> A mensagem recebida foi: " .$mensagem . "</p>";
//var_dump ($_POST);
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
    <a href="contato.html">Voltar</a>
</body>
</html>
   