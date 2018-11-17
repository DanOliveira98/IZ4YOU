<?php
	include('sessao.php');
	include('login.php');
    $usuario = $_SESSION['usuario'];
    $mysqli = "SELECT * From usuario where cpd = $usuario";
	$nom = mysqli_query($conec, $mysqli); 
	$user = mysqli_fetch_assoc($nom);
?>