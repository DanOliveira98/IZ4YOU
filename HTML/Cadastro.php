<?php
	include('../php/rank.php');

?>
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
<body>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="index.html">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
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
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="login.html"><a href="index.html">Home</a></button>
				    </form>
				  </div>
				</nav>
		<div class="corpo">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<div class="wrapper">
			  <h1>Registre-se!</h1>
			  <p>Seu cadastro é fundamental e obrigatório para que você possa lançar ou responder alguma dúvida!</p>
			  <form class="form" method="post" action="../php/codigos.php" name="formulario">
			  	  <input maxlength="5" type="text" name="cpd" size="5" class="name" placeholder="CPD" required="required">
			    <div>
			      <p class="name-help">Por favor informe seu cpd.</p>
			    </div>
			    <input type="text" name="nome" class="name" placeholder="Nome" required="required" minlength="4" maxlength="255">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <input type="text" name="Telefone" class="name" placeholder="Telefone" required="required" minlength="11" maxlength="11">
			    <div>
			      <p class="name-help">Por favor informe seu nome completo.</p>
			    </div>
			    <div>
						<select name="curso" class="name format-select"> 
                        <?php 
                        	$meucurso = $busc["CursoID"];
                            while($linha = mysqli_fetch_assoc($ins)){
                            	$c_p = $linha["CursoID"];
                            	if($meucurso == $c_p){
                        ?>
                            <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>
                            <div>
                            	<p class="name-help">Por favor informe seu Curso.</p>
                        	</div>
                        	<?php
                        	}else{
                        	?>  
                        	 <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>                   
                        	<?php 
                                }
                            }
                         ?>
                		</select>
            	</div>
			    <input type="text" name="semestre" class="name" placeholder="Semestre" required="required" maxlength="2" size="2">
			    <div>
			      <p class="name-help">Por favor informe seu curso.</p>
			    </div>
			    <input minlength="6" maxlength="12" type="password" name="Senha" class="name" placeholder="Senha" required="required">
			    <div>
			      <p class="name-help">Por Favor Informe sua Senha</p>
			    </div>
			    <input minlength="6" maxlength="12" type="password" name="conf_Senha" class="name" placeholder="Confirmar Senha" required="required">
			    <div>
			      <p class="name-help">Confirme Sua senha</p>
			    </div>

			    <input type="email" name="Email" class="Email" placeholder="Email" required="required">
			     <div>
			      <p class="email-help">Please enter your current email address.</p>
			    </div>
			    <input type="submit" class="submit" value="Cadastrar" onClick="validarSenha()">
			  </form>
		</div>
</div>
</body>
</html>