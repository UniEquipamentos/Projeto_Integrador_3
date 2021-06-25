<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1">
        <title>UNI EQUIPAMENTOS</title>
        <script src="https://kit.fontawesome.com/3fa8bb9451.js" crossorigin="anonymous"></script>
          <style>
            body {
                background-image: url("imagens/background.jpg");
              } 
          </style>
     </head>
    
    <body>
      <?php
      if(isset($_SESSION['nao_autenticado'])):
      ?>
    <div class="notification is-danger center">
      <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <form  action="processa.php" method="POST" target="_self">
          <div class="form-box">
            <h1>UniEquipamentos</h1>
            <div class="input-box">
              <i class="fas fa-envelope"></i>
                <input name="matricula" name="text" placeholder="matricula" required  name="matricula">
            </div>
             <div class="input-box">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Senha" id="password"  required  name="senha">
                <span class="eye" onclick="myFunction()">
                <i id="hide1" class="far fa-eye"></i> 
                <i id="hide2" class="far fa-eye-slash"></i>
                </span>
              </div>
              <button type="submit" class="login-botton">LOGIN</button>
            </div>
        </form>
          <script src="script/show_hide_eye.js"></script>
    </body>
</html>