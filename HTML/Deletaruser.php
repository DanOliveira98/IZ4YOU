<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/styles.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/java.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../Img/Logo1.jpg">
	<script>
	function validarSenha(form){ 
    senha = document.formulario.Senha.value
    senhaRepetida = document.formulario.conf_Senha.value
    if (senha != senhaRepetida){
        alert("Repita a senha corretamente");
        document.formulario.conf_Senha.focus();  
        return false;
    }
	}
</script>
</head>
<body class="cor-pg">
				<nav class="navbar navbar-expand-lg navbar-light cor-nav">
				  <a class="navbar-brand" href="index.html">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.php">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="login.php">Login</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				    </form>
				  </div>
				</nav>
		<div class="corpo">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<div class="wrapper">
			  <h1>Exclusão Usuario</h1>
			  <p>Informe seu Cpd e Senha para ser efetuado a exclusão!</p>
			  <form class="form" method="post" action="../php/deletaruser.php" name="formulario">
			  	  <input maxlength="5" type="text" name="cpd" size="5" class="name" placeholder="CPD" required='true'>
			    <div>
			      <p class="name-help">Por favor informe seu cpd.</p>
			    </div>			  	 
			     <input maxlength="12" type="password" name="Senha" size="12" class="name" placeholder="Senha" required='true'>
			    <div>
			      <p class="name-help">Por favor informe seu cpd.</p>
			    </div>
			    <input minlength="6" maxlength="12" type="password" name="conf_Senha" class="name" placeholder="Confirmar Senha" required="required">
			    <div>
			      <p class="name-help">Confirme Sua senha</p>
			    </div>
			    <input type="submit" class="submit" value="Deletar" onClick="validarSenha()">
			</form>