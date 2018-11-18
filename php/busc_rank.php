<?php
	include('conexao.php');
		$curso = $_POST['curso'];
		echo $curso;
	$bus_m = "SELECT u.Nome, u.IzCoins, max(u.IzCoins) from usuario as u inner join curso as c on c.CursoID = u.CursoID where c.Nome = '$curso'";
	$ins_m = mysqli_query($co, $bus_m) or die("Sem inserção");

?>