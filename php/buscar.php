<?php
	include('conexao.php');
	$busc = "SELECT * FROM curso";
	$cur = mysqli_query($co, $busc) or die("Busca falhou!");


?>