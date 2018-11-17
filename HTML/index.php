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
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>

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
				        <a class="nav-link" href="Rank.html">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.php">Lançar Duvida</a>
				          <a class="dropdown-item" href="duv_lanc.html">Duvidas Lancadas</a>
				          <a class="dropdown-item" href="resp_lanc.html">Respostas Lancadas</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="Resul_busc.html">Procurar Duvidas</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="login.php">ENTRE!</button>
				    </form>
				  </div>
				</nav>
	<section>
		<h1>Sobre o IZ4U</h1>
		<h2>RESUMO</h2>
		<p>Esta Aplicação vem pra facilitar o dia a dia dos alunos na Unieuro, tentando Sancionar o maior numero de duvidas possíveis</p>
		


	</section>
</body>
</html>