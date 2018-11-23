<?php
	include ('conexao.php');
	include('login.php');
	if(isset($_POST['nome'])){
        $idcurso = $_POST['curso'];
        $telefone = $_POST['Telefone'];
        $semestre = $_POST['semestre'];
        $email = $_POST['Email'];
        $_senha = $_POST['Senha'];
        $nome = $_POST['nome'];
    	$senha = md5($_senha);
        $con = "SELECT CursoID as c FROM curso WHERE Nome = '$idcurso'";
        $con = mysqli_query($co, $con);
        $testc = mysqli_fetch_assoc($con);
        $curso = $testc['c'];
        $inserir = "UPDATE usuario set Nome = '$nome', Semestre = $semestre,  Telefone = '$telefone', Email = '$email', Senha = '$senha' WHERE CPD = $ses";
        $env = mysqli_query($co, $inserir) or die("error");
        $row = mysqli_num_rows($env);
            if($row == 1){
                        echo ("<script>alert('Cadastro Não Efetuado, tente novamente!!'); location.href='../html/cadastro.php';</script>");
            
            }else{
                    echo ("<script>alert('Cadastro Efetuado com Sucesso!!'); location.href='../html/Login.php';</script>");
            }
    }
?>




?>