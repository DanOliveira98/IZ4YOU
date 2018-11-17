<?php
	include('login.php');
	$usuario = $ses;
	$mysqli = "SELECT * From usuario where CPD = $usuario";
	$nom = mysqli_query($co, $mysqli); 
	$user = mysqli_fetch_assoc($nom);
?>
