<!DOCTYPE html>
<html lang="pt-br">
<title>UNI EQUIPAMENTOS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<body>

<!-- Navbar (fica em cima) -->
<div class="top">
  <div class="bar white wide padding card">
    <a href="#home" class="bar-item button"><b>UNI</b> Equipamentos</a>

    <!-- links flutuantes a direita. esconda em telas pequenas -->

    <div class="right hide-small">
      
      <a href="perfil.php" class="bar-item button">Perfil</a>
      <a href="#Equipamentos" class="bar-item button">Equipamentos</a>
      <a href="regras.php" class="bar-item button">Regras</a>
      <a href="#reservar" class="bar-item button">Reservar</a>
    </div>
  </div>
  </div>

  <img style="width: 100%" src="../imagens/banner.png">
<!-- cabeçalho -->
<div class="content padding" style="max-width:1564px">
  <div style="margin-top: 60px;" class="container padding-32"></div>
  <!-- seção do projeto -->
  <div class="container padding-4" id="Equipamentos">
    <h2 class="border-bottom border-light-grey padding-4">Consultar categorias</h2>
    </div>

        <table border="1" width="900px">
            <tr>
                <td class="cadrastro">Cadastro de equipamento</td>
            </tr>

            <tr>
                <td>
                    <form action="cadastroEquipamentos.php" method="POST">
                        <label for="fname" id="name">Nome:</label>
                        <input type="text" id="fname" name="nome">
                   
                </td>

            </tr>

            <tr>
                <td colspan="2">
                    
                        <label for="fdescricao" id="descricao">Descrição:</label>
                        <input type="text" id="fdescricao" name="descricao">
                    
                    <br><br>
			      <button type="submit" >Salvar</button> <button type="submit" >Cancelar</button> 
                </td>
            </tr>
            </form>
        </table>
        </div>
        <div style="margin-top: 60px;" class="container padding-32"></div>
<footer class="center black padding-64">
  <p>Desenvolvido por <b>UNI</b> Equipamentos</a></p>
</footer>
    </body>
</html>