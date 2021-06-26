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


<!-- conteudo da pagina -->
<div class="content padding" style="max-width:1564px">
  <div style="margin-top: 60px;" class="container padding-32"></div>
  <!-- seção do projeto -->
  <div class="container padding-32" id="Equipamentos">
    <h2 class="border-bottom border-light-grey padding-16">Consultar categorias</h2>
  </div>
<hr>
	<div>
	
		<h3>Consulta de equipamentos</h3>
			<div>
				<input type="text" placeholder="Título" id="titulo">

				<label for="Prioridade">Prioridade</label>

				<select name="Prioridade">
					<option>Imediata</option>
					<option>Urgente</option>
					<option>Alta</option>
					<option>Normal</option>
					<option>Baixa</option>

				</select>

				
				<label for="datarg">Data de registro</label>

				<input type="date" name="datarg">

				<input type="button" name="regd" value="Cadastrar dados">

			

<hr>
	</div>


<div>
	<table id="tabela">
		<tr>
			<th>Título da categoria</th>
			<th>Prioridade</th>
			<th>Data</th>
			<th>Operações</th>


		</tr>

		<td> </td>
		<td> </td>
		<td> </td>
		<td> <button>Excluir</button> <button>Editar</button> </td>

		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td> <button>Excluir</button> <button>Editar</button> </td>

		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td> <button>Excluir</button> <button>Editar</button> </td>


		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td> <button>Excluir</button> <button>Editar</button> </td>


		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> </td>
			<td> <button>Excluir</button> <button>Editar</button> </td>


		</tr>



	</table>

</div>

<div style="margin-top: 60px;" class="container padding-32"></div>
<footer class="center black padding-64">
  <p>Desenvolvido por <b>UNI</b> Equipamentos</p>
</footer>

</body>
</html>