<?php
	include ('conexao.php');
	if(isset($_POST['cpd'])){
	$username = $_POST['cpd'];
	$pas = $_POST['Senha'];
	$senha = md5($pas);
	$login = "SELECT CPD as c, Senha as s FROM usuario WHERE CPD = '{$username}' and Senha = '{$senha}' ";
	$acesso = mysqli_query($co, $login) or die("erro");
	$user = mysqli_fetch_assoc($acesso);
	if($user['c'] == $username and $user['s'] == $senha){
	$deletar = "DELETE FROM usuario WHERE CPD = '{$username}'";
	$delete = mysqli_query($co, $deletar) or die('erro');
                  echo ("<script>alert('Usuário Deletado!'); location.href='../html/index.html'</script>");
   		}else{
                  echo ("<script>alert('Não foi possivel efetuar a Exclusão! Por motivos de segurança você será redirecionado para a pagina de login'); location.href='../html/login.php'</script>");
               }

}
?>