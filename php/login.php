<?php
   include('conexao.php');
     include('sessao.php');
   if ( isset($_POST["cpd"])){
   		$username = $_POST["cpd"];
   		$pas = $_POST["senha"];
         $senha = md5($pas);
   		$login = "SELECT CPD as c, Senha as s FROM usuario WHERE CPD = '{$username}'";
   		$acesso = mysqli_query($co, $login) or die("erro");
         $user = mysqli_fetch_assoc($acesso);
         if($user['c'] == $username){
         if($user['s'] == $senha){ 
   					$_SESSION['usuario'] = $username;
   					header('Location:/IZ4U/HTML/index.php');
   					exit();
   		}
      }else{
                  echo ("<script>alert('Não foi possivel efetuar login, tente novamente!!');location.href='../html/login.php';</script>");
      }
}
      $ses = $_SESSION['usuario'];
?>	