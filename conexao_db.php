<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$banco = "uniequipamentos";

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
mysqli_set_charset($mysqli, "utf8");
    
if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>