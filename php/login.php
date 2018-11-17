<?php
   include('conexao.php');
   include('sessao.php');
   if ( isset($_POST["username"])) {
   		$username = $_POST["username"];
   		$pas = $_POST["password"];
         $senha = $pas;

   		$login = "SELECT * FROM usuario WHERE CPD = '{$username}' and Senha = '{$senha}' ";
   		$acesso = mysqli_query($co, $login) or die("erro");
   		$row = mysqli_num_rows($acesso);
   				if($row == 1){
   					$_SESSION['usuario'] = $username;
   					header('Location:/IZ4U/HTML/index.php');
   					exit();
   				}else{
                  echo ("<script>alert('Não foi possivel efetuar login, tente novamente!!'); location.href='../html/login.php'</script>");
               }

      }
      $ses = $_SESSION['usuario'];

?>	