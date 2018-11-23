<?php  
	include('../php/sessao_usuario.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>IZ4U</title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/index.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../Img/Logo1.jpg">

</head>
<body class="cor-pg">
				<nav class="navbar navbar-expand-lg navbar-light cor-nav">
				  <a class="navbar-brand" href="index.html">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="Perfil.php">Perfil<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.php">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.php">Lançar Duvida</a>
				          <a class="dropdown-item" href="duv_lancacadas.php">Duvidas Lancadas</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="Perfil.php">PERFIL!</button>
				    </form>
				  </div>
				</nav>
				<div class="col">
		<h1 class="cor-h1">Sobre IZ4U</h1>
		<h2 class="cor-h1">Motivação</h2>
        <h3 class="cor-letras">No decorrer da vida de qualquer pessoa, o aparecer de dúvidas é uma coisa normal, seja quando elas estão, em sala de aula, estão estudando em casa, estão vendo TV, etc. A resolução destas dúvidas porém, pode ser uma coisa mais complicada, a pessoa pode não tem acesso a internet, pode não conseguir expressar de maneira clara sua dívida para um esclarecedor, dentro outros fatores.</h3>
		<h3 class="cor-letras">No âmbito pedagógico, segundo Jaeger e Accorssi (2002), um tutor para cada aluno, seria a solução  para a falta de comunicação entre professor e aluno, sendo que o tutor iria enviar as dúvidas para os professores. Porém um tutor para cada aluno e uma opção muito inviavel, pelo custo  e pelo tempo que as instituições  precisarão  investir para implantar este modo de tirar dúvida.</h3>
		<h3 class="cor-letras">A motivação para a criação do site, nos ocorreu devido a estas dúvidas, que surgem em casa (quando os alunos estão estudando) ou as dúvidas que surgem quando os alunos estão em sala de aula, porém tem vergonha de perguntar ao professor. Fizemos uma pesquisa é foi comprovado que a cada 10 alunos 8 tem vergonha de tirar suas duvidas com o professor.</h3>
	</div>
</body>
</html>