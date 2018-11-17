<?php
	include('../php/sessao.php');
	include ('..php/login.php');
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
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
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.html">Ranking</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
				      </li>
				    </ul>
				  </div>
				</nav>
	<div class="format-pg">
	  <div class="grid">

	    <form action="" method="POST" class="form login">

	      <div class="form__field">
	        <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">CPD/MATRICULA</span></label>
	        <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
	      </div>

	      <div class="form__field">
	        <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">SENHA</span></label>
	        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
	      </div>

	      <div class="form__field">
	        <input type="submit" value="Sign In">
	      </div>


	    </form>
		
	    <p class="text--center">Sem Cadastro? <a href="Cadastro.html">Cadastre</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

	  </div>
	  <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
	  </div>
</body>
</html>