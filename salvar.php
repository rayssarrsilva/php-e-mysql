<?php
include("conexao.php");

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
$nome = $_NOME["nome"];

$sql = "o cpf é '$cpf' a senha é '$senha' o nome é '$nome' ";
if(!$resultado = $conn -> query($sql)){
    die("erro");
}