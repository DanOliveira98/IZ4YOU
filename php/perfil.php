<?php
	include('conexao.php');
    $usuario = $_SESSION['usuario'];
    $mysqli = "SELECT c.Nome From usuario as u inner join Curso as c on u.CursoID = c.CursoID";
	$nom = mysqli_query($conec, $mysqli); 
	$user = mysqli_fetch_assoc($nom);
?>