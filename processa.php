<?php
session_start();
include ('conexao.php');

if(empty($_POST['matricula']) || empty($_POST['senha'])){
    header('Location: index.html');
    exit();
}

$matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_conta, matricula from login WHERE matricula = '{$matricula}'and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
 
if($row == 1) {
  $_SESSION['matricula'] = $matricula;
  header('Location: paginas/home.php');
  exit();
}else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}


