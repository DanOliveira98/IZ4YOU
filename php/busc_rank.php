<?php
	include('conexao.php');
		if(empty($_POST['curso'])){
				$curso = "Direito";
		}else{
			$curso = $_POST['curso'];
		}
	$bus_m = "SELECT u.Nome as n, u.IzCoins as p from usuario as u inner join curso as c on c.CursoID = u.CursoID where c.Nome = '$curso' order by IzCoins limit 5";
	$ins_m = mysqli_query($co, $bus_m) or die("Sem inserção");


?>