<?php
	include('conexao.php');
	$busc = "SELECT * FROM curso";
	$ins = mysqli_query($co, $busc);
	$busc = mysqli_fetch_assoc($ins);

	if(isset($_POST['curso'])){
		$curso = $_POST['curso'];
	$bus_m = "SELECT u.Nome, u.IzCoins, max(u.IzCoins) from usuario as u inner join curso as c on c.CursoID = u.CursoID ";
	$ins_m = mysqli_query($co, $bus_m) or die("Sem inserção");
}
?>