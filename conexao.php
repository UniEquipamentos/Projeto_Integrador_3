<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

$banco = "uniequipamentos";

try {

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    echo " Conectado com Sucesso.";

} catch(\throwable $th) {
    echo "Falha na conexão" .$th;
}

?>