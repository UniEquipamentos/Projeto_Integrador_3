<?php
session_start();
include ("conexao_db.php");

$dado = $_POST['quantidade'];


$result= "UPDATE pedidos SET quantidade = '$dado' WHERE id_conta = 1";
$con = $mysqli->query($result) or die ($mysqli->error);
echo " SUCESSO - O registo foi editado com sucesso";

?>
 <form action="listar_pedidos.php" target="_self"><br>

<button type="submit">
  <i class="helvetica"></i>Voltar
</button>
</form>