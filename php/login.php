<?php
   include('conexao.php');
   include('sessao.php');
   if ( isset($_POST["username"])) {
   		$username = $_POST["username"];
   		$password = $_POST["password"];
   		$login = "SELECT * FROM usuario WHERE cpd = $username and senha = '$password'";
   		$acesso = mysqli_query($co, $login) or die("erro");
   		$row = mysqli_num_rows($acesso);
   				if($row == 1){
   					$_SESSION['usuario'] = $username;
   					header('Location:/IZ4U/HTML/index.php');
   					exit();
   				}

      }
      $ses = $_SESSION['usuario'];

?>	