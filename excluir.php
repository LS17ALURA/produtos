<?php

require_once "conexao.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM `produto` WHERE `codigo` = ?";

    $comando = $conexao->prepare($sql);

    $comando->bind_param("i", $id);

    $comando->execute();
} else {
    echo "ID not found";
}

header("Location: index.php");
