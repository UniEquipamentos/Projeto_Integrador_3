<?php

include ("conexao_db.php");

$consulta = "SELECT * FROM pedidos";
$con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<html>
<head>
<meta charset= "utf8">
</head>
<body>
    <h2 center>Pedidos</h2>
    <table border ="1">
        <tr>
            <td>id_conta</td>
            <td>id_pedido</td>
            <td>Data do Pedido</td>
            <td>Tipo de pagamento</td>
            <td>Status do pagamento</td>
            <td>Quantidade</td>
            <td>Valor</td>
            <td>id_emprestimo</td>
            <td>id_equipamentos</td>
            <td>Ação</td>
        </tr>
        <?php while($dado = $con->fetch_array()){ ?>
       
        <tr>
            <td><?php echo $dado["id_conta"]; ?></td>
            <td><?php echo $dado["id_pedido"]; ?></td>
            <td><?php echo date("d/m/y", strtotime($dado["data_hora"])); ?></td>
            <td><?php echo $dado["tipo_pagamento"]; ?></td>
            <td><?php echo $dado["status_pagamento"]; ?></td>
            <td><?php echo $dado["quantidade"]; ?></td>
            <td><?php echo $dado["valor"]; ?></td>
            <td><?php echo $dado["id_emprestimo"]; ?></td>
            <td><?php echo $dado["id_equipamentos"]; ?></td>
            <td><a href="alterar_pedidos.php?id=<?php echo $dado["id_conta"]; ?>">Editar</a>
                <a href="excluir_pedidos.php?id=<?php echo $dado["id_conta"]; ?>">Excluir</a></td>
         </tr>
         <?php } ?>
       </table>
       <form action="paginas/perfil.php" target="_self">

      <button type="submit">
        <i class="helvetica"></i>Voltar
      </button>
    </form>
      </body>
    </html>