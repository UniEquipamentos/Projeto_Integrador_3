<?php
session_start()
?>
<!DOCTYPE html>
<html>
<title>Perfil</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/perfil_style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="../css/perfil_font.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>

<body class="white">
  <div class="top">
    <div class="bar white wide padding card">
      <a href="home.php" class="bar-item button"><b>UNI</b> Equipamentos</a>
      <!-- links flutuantes a direita. esconda em telas pequenas -->
      <div class="right hide-small">
        <a href="perfil.php" class="bar-item button">Perfil</a>
        <a href="home.php#Equipamentos" class="bar-item button">Equipamentos</a>
        <a href="regras.php" class="bar-item button">Regras</a>
        <a href="home.php#reservar" class="bar-item button">Reservar</a>
      </div>
    </div>
  </div>
  
  
  <img style="width: 100%" src="../imagens/banner.png">
<div class="content margin-top" style="max-width:1400px;">

  <!-- O Grid -->
  <div class="row-padding">
  
    <!-- Coluna Esquerda -->
    <div class="third">
    
      <div class="white text-grey card-4">
        <div class="display-container">
          <img src="../imagens/avatar_user.png" style="width:100%" alt="Avatar">
          <div class="display-bottomleft container text-black"></div>

          <form action="envia_foto.php" method="post" enctype="multipart/form-data">
            <input type="file" name="Arquivo" id="Arquivo"><br>
            <input type="submit" value="Enviar" name="submit">
          </form>

        </div>

        <div class="container">
          <p><i class="fa fa-fw margin-right large text-teal"></i>
            <form>
              <label for="fname">Nome Completo: </label><br>
              <input type="text" id="fname" name="fname"><br>
            </form>
            <form>
              <label for="email">Email: </label><br>
              <input type="email" id="email" name="email"><br>
            </form>
            <form>
              <label for="fname">Data de Nascimento: </label><br>
              <input type="text" id="fname" name="fname"><br>
            </form></p>
          <hr>

          <!-- Final da Coluna Esquerda -->
        </div>
      </div><br>
    </div>

    <!-- Coluna Direita -->
    <div class="twothird">
    
      <div class="container card white margin-bottom">
        <h2 class="text-grey padding-16"><i class="fa fa-fw margin-right xxlarge text-teal"></i>Meus Pedidos</h2>

        <div class="container">
          <h5 class="opacity"><b>Primeiro Pedido</b></h5>
          <form action="../listar_pedidos.php" target="_self">

      <button type="submit">
        <i class="helvetica"></i>Listar pedidos
      </button>
        </div>

        <div class="container">
          <h5 class="opacity"><b>Segundo Pedido</b></h5>
        </div>

        <div class="container">
          <h5 class="opacity"><b>Terceiro Pedido</b></h5>
        </div>
      </div>

    <!-- Final da Coluna Direita -->
    </div>
  </div>
  <!-- Fim do bloco Meus Pedidos -->
</div>
<footer class="center black padding-64">
  <p>Desenvolvido por <b>UNI</b> Equipamentos</a></p>
</footer>
</body>
</html>
