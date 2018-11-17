<?php
	include('conexao.php');
	include('login.php');
	  if($row == 1){
   			$_SESSION['usuario'] = $username;
   			header('Location:/IZ4U/HTML/index.php');
   			exit();
   		}
?>