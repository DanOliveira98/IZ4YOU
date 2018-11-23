<?php
		include('conexao.php');

		$perguntas = "SELECT p.Descricao as d, u.Nome as n, c.Nome as c FROM pergunta as p inner join usuario as u on p.idUsuario = u.UsuarioID JOIN curso as c on p.idCurso = c.CursoID";
		$perg = mysqli_query($co, $perguntas);
		$p = mysqli_fetch_assoc($perg);

?>