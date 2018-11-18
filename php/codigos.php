<?php
        include ('conexao.php');
        if(array_key_exists('cpd', $_POST)){
        $cpd = $_POST['cpd'];
        $idcurso = $_POST['curso'];
        $telefone = $_POST['Telefone'];
        $semestre = $_POST['semestre'];
        $email = $_POST['Email'];
        $_senha = $_POST['Senha'];      
        $nome = $_POST['nome'];
    	$senha = md5($_senha);
        $c = "SELECT * FROM curso where Nome = '$idcurso'";
        $tstc = mysqli_query($co, $c);
        $testc = mysqli_fetch_assoc($tstc);
        $cursoid = $testc['CursoID'];
        $test = "SELECT * FROM usuario where CPD = $cpd";
        $tst = mysqli_query($co, $test);
        $tst = mysqli_fetch_assoc($tst);
        if ($tst['CPD'] == $cpd) {
            echo ("<script>alert('CPD JÁ UTILIZADO!!');</script>");
            echo ("<script>alert('Cadastro Não Efetuado, tente novamente!!'); location.href='../html/cadastro.php';</script>");
        }else{
        $inserir = "INSERT INTO usuario(CPD, Nome, Semestre, Telefone, Email, Senha, CursoID) VALUES ($cpd, '$nome', $semestre, '$telefone', '$email', '$senha', $cursoid)";
        $env = mysqli_query($co, $inserir) or die("error");
        $row = mysqli_num_rows($env);
            if($row == 1){
                        echo ("<script>alert('Cadastro Não Efetuado, tente novamente!!'); location.href='../html/cadastro.php';</script>");
            
            }else{
                    echo ("<script>alert('Cadastro Efetuado com Sucesso!!'); location.href='../html/Login.php';</script>");
            }
        }
    }
?>