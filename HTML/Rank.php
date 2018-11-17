<?php
	include('');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="index.html">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="Perfil.html">Perfil<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.html">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.html">Lançar Duvida</a>
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
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.html">Entre</a></button>
				    </form>
				  </div>
				</nav>
<div>
		<form class="form" method="post">
		<select id="curso">
			<label for="cursos">Cursos</label>
			<?php
			while ($linha = mysqli_fetch_assoc($listaCursos)) {
			?>
			<option value="<?php echo $linha['CursoID']?>"></option>
				<?php echo utf8_encode($linha['Nome'])?>
			<?php

		}
			?>
			<input type="submit" class="submit" value="Ver Rank">
		</select>
		</form>
	</div>
</body>
</html>