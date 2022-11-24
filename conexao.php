<?php
$hostname = "localhost";
$banco="desenho";
$usuario = "root";
$senha = "";

$mysqli = new mysqli ($hostname, $usuario, $senha, $banco);

if($mysqli->connect_errno){
    echo "falha ao conectar: (". $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}
?>
    