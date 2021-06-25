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
  <div class="bar gray wide padding card">
  <div class="right hide-small">
    <?php
session_start();
?>
<h7>Olá, <?php echo $_SESSION['matricula'];?></h7>
<h7><a href="../logout.php">Sair</a><h7>
</div>
</div>
</div>


<img style="width: 100%" src="../imagens/banner.png">
<!-- cabeçalho -->


<!-- conteudo da pagina -->
<div class="content padding" style="max-width:1564px">
  <div style="margin-top: 60px;" class="container padding-32"></div>
  <!-- seção do projeto -->
  <div class="container padding-32" id="Equipamentos">
    <h2 class="border-bottom border-light-grey padding-16">Equipamentos</h2>
  </div>
<!-- Teste de imagem
  <div class="row-padding">
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Notebook</div>
        <img src="../imagens/notebook.png" alt="House" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Mouse</div>
        <img src="../imagens/mouse.png" alt="Mouse" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">HD Externo</div>
        <img src="../imagens/hd.jpg" alt="HD Externo" style="width:100%">
      </div>
    </div>
    <div class="col l3 m6 margin-bottom">
      <div class="display-container">
        <div class="display-topleft black padding">Teclado</div>
        <img src="../imagens/teclado.png" alt="Teclado" style="width:99%">
      </div>
    </div>
  </div>-->

  
		<!--BANNER CARROCEL 
    <div class="banner-home inativo-mobile" style="max-height: 357px; margin: 0em auto 1em">
      <div id="banner_principal" class="owl-carousel owl-theme">
                <div class="item" data-bannerId="335">
            <a href=" ">
              <picture>
                <source media="(min-width: 768px)" srcset=" ">
                <img src=" " alt="Dia dos Namorados" title=" ">
              </picture>
            </a>
          </div>
      </div>
    </div>-->
  
        <div class="row deck-card">
          <div class="banners-card-home">
            <div class="mini-banners medio">
                <a href="notebook.php">
                  <picture>
                    <source media="(min-width: 768px)" srcset="../imagens/notebook.png">
                    <img src=" " alt="Notebook" title="Notebook" style="max-height: 331px;">
                  </picture>
                </a>
              </div>
          
            <div class="mini-banners medio margin">
              <a href="mouse.php" >
                <picture>
                  <source media="(min-width: 768px)" srcset="../imagens/mouse.png">
                  <img src=" " alt="Mouse" title="Mouse">
                </picture>
              </a>
          </div>
              
          <div class="mini-banners medio">
            <a href=" " >
              <picture>
                <source media="(min-width: 768px)" srcset="../imagens/hd.png">
                <img src=" " alt="HD" title="HD">
              </picture>
            </a>
          </div>
        </div>
      </div>
  
        <div class="row deck-card">
          <div class="banners-card-home">
            <div class="mini-banners medio">
                <a href=" ">
                  <picture>
                    <source media="(min-width: 768px)" srcset="../imagens/teclado.png">
                    <img src=" " alt="Teclado" title="Teclado" style="max-height: 331px;">
                  </picture>
                </a>
              </div>
        
            <div class="mini-banners medio margin">
              <a href=" " >
                <picture>
                  <source media="(min-width: 768px)" srcset="../imagens/pendrive.png">
                  <img src=" " alt="Pendrive" title="Pendrive">
                </picture>
              </a>
            </div>
          
          <div class="mini-banners medio">
            <a href=" " >
              <picture>
                <source media="(min-width: 768px)" srcset="../imagens/arduino.png">
                <img src=" " alt="Arduino" title="Arduino">
              </picture>
            </a>
          </div>
        </div>
      </div>
  <!-- sobre a seção -->
  

  <!-- seção de contato -->
  <div class="container padding-32" id="reservar">
    <h2 class="border-bottom border-light-grey padding-16">Reservar</h2>
    <p>Preencha o formulário e entraremos em contato sobre sua reserva.</p>
    <form action="reserva.html" target="_self">
      <input class="input border" type="text" placeholder="Nome" required text="Nome">
      <input class="input section border" type="text" placeholder="Email" required email="Email">
      <input class="input section border" for="Equipamento" type="text" placeholder="Equipamento" required name="Equipamento">
      <input class="input section border" type="text" placeholder="Comentário" name="Comentário">
      <button class="button black section" type="submit">
        <i class="helvetica"></i> Reservar
      </button>
    </form>
    </div> 
  </div>
  <!-- Rodapé -->
<footer class="center black padding-64">
  <p>Desenvolvido por <b>UNI</b> Equipamentos</a></p>
</footer>
</body>
</html>