<!DOCTYPE html>
<html>
<title>Descrição</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/reserva.css">
<link rel="stylesheet" href="../css/style.css">
<body>

 

<img style="width: 100%" src="../imagens/banner.png">


}
</style>
<body>
  <div class="top">
    <div class="bar white wide padding card">
      <a href="home.html" class="bar-item button"><b>UNI</b> Equipamentos</a>
      <!-- links flutuantes a direita. esconda em telas pequenas -->
      <div class="right hide-small">
        <a href="perfil.html" class="bar-item button">Perfil</a>
        <a href="home.html" class="bar-item button">Home</a>
        <a href="regras.html" class="bar-item button">Regras</a>
        <a href="#reservar" class="bar-item button">Reservar</a>
      </div>
    </div>
  </div>

</header>

<!-- Add a background color and large text to the whole page -->
<div class="content padding" style="max-width:1564px">
  <div style="margin-top: 50px;" class="container padding-32"></div>

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Mouse</span></h5>
    <img src="../imagens/mouse1.png" alt="Mouse" style="width:100%">
   

<!-- Menu Container -->

<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Aluguel</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Descrição</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Alugar</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-50 w3-card">
      <h5>Descrição</h5>
      <pre> 
Simples de instalar, rápido e fácil de usar.
Não é preciso software. Basta conectá-lo em uma porta USB 
e começar a usá-lo.
Tamanho padrão, design ambidestro, projetado para as duas mãos.
Assim você se sentirá confortável, mesmo depois de usá-lo por 
muitas horas.
Rastreamento óptico em alta definição (1000 dpi).
Permite um controle suave do cursor para
rastreamento preciso e  fácil seleção de texto</pre><br>

    </div>  <img style="width: 100%" src="../imagens/banner.png">
    
    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      
      <form action="/action_page.php" target="_blank">
    
        <div class="w3-container" id="where" style="padding-bottom:32px;">
            <div class="w3-content" style="max-width:700px">
             
              <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="Nome"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="E-mail" required name="E-mail"></p>
                <input id="date" type="date">
                
                <p><button class="w3-button w3-black" type="submit">Finalizar</button></p>
              </form>
            </div>
          </div>
   
  </div>
</div>


<!-- End page content -->
</div>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
