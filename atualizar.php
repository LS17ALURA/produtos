<?php

require_once "conexao.php";

if(isset($_POST["descricao"]) && isset($_POST["peso"]) 
           && isset($_POST["quantidade"]) && isset($_POST["quantidade"]))
{

$id =        $_POST["id"];        
$descricao =      $_POST["descricao"];
$peso = $_POST["peso"];
$quantidade =     $_POST["quantidade"];
$valor = $_POST["valor"];

//String com o comando SQL para ser executado no DB
$sql = "UPDATE produto SET 
`descricao`= ?, `peso`= ?, `quantidade`= ?, `valor`= ? 
WHERE  `codigo`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sdidi", $descricao, $peso, $quantidade, $valor, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
