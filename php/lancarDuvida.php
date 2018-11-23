<?php
        include ('conexao.php');
        include('sessao_usuario.php');
        if(isset($_POST['Pergunta'])){
        $duvida = $_POST['Pergunta'];
        $curso = $_POST['curso'];
        $c = "SELECT * FROM curso where Nome = '$curso'";
        $tstc = mysqli_query($co, $c);
        $testc = mysqli_fetch_assoc($tstc);
        $cursoid = $testc['CursoID'];
        $idUsuario = $user['usuarioID'];
        $inserir = "INSERT INTO pergunta(Descricao, idCurso, idUsuario) VALUES ('$duvida', $cursoid, $idUsuario)";
         $env = mysqli_query($co, $inserir) or die("erro");
		 if(!$env){
                        echo ("<script>alert('Duvida não Lançada, tente novamente!!'); location.href='../html/lanc_duvida.php';</script>");
            
            }else{
                    echo ("<script>alert('Duvida Lançada com Sucesso!!'); location.href='../html/Index.php';</script>");
            }
         }
?>
