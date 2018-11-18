<?php
	include('login.php');
	$usuario = $ses;
	$mysqli = "SELECT * From usuario where CPD = $usuario";
	$nom = mysqli_query($co, $mysqli) or die("Erro"); 
	$user = mysqli_fetch_assoc($nom);
?>
