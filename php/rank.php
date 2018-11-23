<?php
	include('conexao.php');
	$busc = "SELECT * FROM curso";
	$ins = mysqli_query($co, $busc);
	$busc = mysqli_fetch_assoc($ins);
?>