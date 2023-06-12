
<?php

require_once "conexao.php";

if(isset($_POST["descricao"]) && isset($_POST["peso"]) 
           && isset($_POST["quantidade"]) && isset($_POST["valor"]))
{

        $descricao =      $_POST["descricao"];
        $peso = $_POST["peso"];
        $quantidade =     $_POST["quantidade"];
        $valor = $_POST["valor"];

        //String com o comando SQL para ser executado no DB
        $sql = "INSERT INTO `produto`(`descricao`, `peso`, `quantidade`, `valor`) 
                VALUES (?, ?, ?, ?);";

        //Prepara o SQL para ser executado no banco de dados
        $comando = $conexao->prepare($sql);

        //adiciona os valores nos parâmetros
        $comando->bind_param("sdid", $descricao, $peso, $quantidade, $valor);

        //executa o SQL - Comando no Banco de Dados
        $comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");


