<!DOCTYPE html>
<html>
<title>Regras - UNI EQUIPAMENTOS</title>
<meta charset="UTF-8">
<style>
pre{
  text-align: center;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<body>


<!-- Navbar (fica em cima) -->
<div class="top">
  <div class="bar white wide padding card">
    <a href="home.php" class="bar-item button"><b>UNI</b> Equipamentos</a>
    <!-- links flutuantes a direita. esconda em telas pequenas -->
    <div class="right hide-small">
      <a href="home.php" class="bar-item button">Home</a>
      <a href="home.php#Equipamentos" class="bar-item button">Equipamentos</a>
      <a href="regras.php" class="bar-item button">Regras</a>
      <a href="#reservar" class="bar-item button">Reservar</a>
    </div>
  </div>
</div>

<img style="width: 100%" src="../imagens/banner.png">
<!-- cabeçalho -->


<!-- conteudo da pagina -->
<div class="content padding" style="max-width:1564px">
<div style="margin-top: 50px;" class="container padding-32"></div>
 
  <pre style="font-family: helvetica;"><b>
  <span style="color:white; font-size: 50px; border-style: solid; border-color: blueviolet; background-color: blueviolet; border-radius: 55px; height: 50%; width: 50%;">REGRAS DE EMPRÉSTIMO</span>

  a) A Cessão dos equipamentos eletrônicos será de uso exclusivo nas
  dependências da UNI Equipamentos de acordo com seu horário de funcionamento. 
  (Segunda à sexta-feira das 8h às 22h e sábados das 8h às 12h).
  
  b) O empréstimo é de uso individual e intransferível, sendo a integridade do
  equipamento responsabilidade do titular; (não será realizado o empréstimo a
  cônjuges, filhos, colegas ou assemelhados;
  
  c) Será emprestado somente um equipamento por usuário;
  
  d) Todo arquivo deixado no equipamento será apagado;<br> A UNI Equipamentos não se responsabiliza por perdas de arquivos e informações armazenadas nos equipamentos.
  
  
  <span style="color:white; font-size: 50px; border-style: solid; border-color: blueviolet; background-color: blueviolet; border-radius: 55px; height: 25%; width: 25%;">PROIBIDO</span>
  
  a) Abrir o equipamento, retirar peças, ou alterar qualquer forma dos hardwares,
  sob qualquer pretexto;<br>
  b) Instalar ou desinstalar qualquer programa nos equipamentos;<br>
  c) Alterar a configuração do equipamento;<br>
  d) Violar os lacres de segurança do equipamento;<br>
  e) Emprestar os equipamentos eletrônicos a outra(s) pessoa(s);<br>
  f) Uso dos equipamentos eletrônicos para jogos eletrônicos;<br><br></b></pre>
  
  
      <pre style="font-family: helvetica;">
        <strong>
  <span style="color:white; font-size: 50px; border-style: solid; border-color: blueviolet; background-color: blueviolet; border-radius: 55px; height: 25%; width: 25%;">PENALIDADES</span>
  
  a) Ao usuário que não restituir o equipamento no tempo previsto, será cobrada
  multa (no valor de R$ 5,00 por hora de atraso), não sendo devolvido o
  equipamento no mesmo dia, ou seja, se o usuário devolver o
  equipamento no dia seguinte(cacarretará suspensão do acesso aos equipamentos eletrônicos por 2 meses, 
  sem prejuízo das sanções acadêmicas regimentais, cíveis e criminais cabíveis;
  
  b) Em caso de dano ou perda do equipamento e/ou seus acessórios, o usuário
  terá que reembolsar o valor da manutenção e/ou substituir por equipamento
  igual ou equivalente;
  
  c) O usuário que retirar qualquer material eletrônico sem a devida
  autorização, ficará impedido de utilizar os serviços de empréstimo por 6 meses.</strong></pre>

<!-- seção de contato -->
<div class="container padding-32" id="reservar">
  <h2 class="border-bottom border-light-grey padding-16">Reservar</h2>
  <p>Preencha o formulário e entraremos em contato sobre sua reserva.</p>
  <form action="reserva.html" target="_blank">
    <input class="input border" type="text" placeholder="Nome" required name="Nome">
    <input class="input section border" type="text" placeholder="Email" required name="Email">
    <input class="input section border" type="text" placeholder="Equipamento" required name="Equipamento">
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