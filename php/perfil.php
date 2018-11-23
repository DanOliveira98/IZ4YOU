<?php
	include('conexao.php');
    $usuario = $_SESSION['usuario'];
    $m = "SELECT u.Nome as n, u.IzCoins as p, c.Nome as c, u.Semestre as s, u.Telefone as t, u.Email as e From usuario as u inner join curso as c on u.CursoID = c.CursoID where u.CPD = $usuario";
	$nom = mysqli_query($co, $m); 
	$user = mysqli_fetch_assoc($nom);
?>