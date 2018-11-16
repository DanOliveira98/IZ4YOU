<?php
session_start();
    $daniel = mysqli_connect("localhost","root","","iz4you");
    if(mysqli_connect_errno()){
        die("Conexao Falhou: ". mysqli_connect_errno);
        
    }
   if ( isset($_POST["username"]) ) {
   		$username = $_POST["username"];
   		$password = $_POST["password"];

   		$login = "SELECT usuarioID, Nome, IzCoins, Curso FROM usuario WHERE cpd = '{$username}' and senha = '{$password}' limit 1";
   		$acesso = mysqli_query($daniel, $login);
   		$row = mysqli_num_rows($acesso);
   				if($row == 1){
   					$_SESSION['usuario'] = $username;
   					header('Location:/IZ4U/HTML/Perfil.php');
   					exit();
   				}
   		}	

?> 