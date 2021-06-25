<?php
session_start();
include ("conexao_db.php");
$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$result= "DELETE FROM pedidos WHERE id_conta = '$id'";
$con = $mysqli->query($result) or die ($mysqli->error);
?>

<form action="listar_pedidos.php" target="_self"><br>

<button type="submit">
  <i class="helvetica"></i>Voltar
</button>
</form>