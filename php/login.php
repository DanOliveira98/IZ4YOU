<?php
   include('conexao.php');
      session_start();
      if(isset($_POST["username"])){
   	$username = $_POST["username"];
   	$password = $_POST["password"];
      $login = "SELECT * FROM usuario WHERE cpd = $username and senha = '$password'";
      $acesso = mysqli_query($co, $login) or die("erro");
      $row = mysqli_num_rows($acesso);
   }
?>	