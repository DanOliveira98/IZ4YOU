<?php
        include ('conexao.php');
        $cpd = $_POST['cpd'];
        $idcurso = $_POST['Curso'];
        $telefone = $_POST['Telefone'];
        $semestre = $_POST['semestre'];
        $email = $_POST['Email'];
        $_senha = $_POST['Senha'];      
        $nome = $_POST['nome'];
    	$senha = md5($_senha);
        $test = "SELECT * FROM usuario where CPD = $cpd";
        $tst = mysqli_query($co, $test);
        $tst = mysqli_fetch_assoc($tst);
        if ($tst['CPD'] == $cpd) {
            echo ("<script>alert('CPD JÁ UTILIZADO!!');</script>");
            echo ("<script>alert('Cadastro Não Efetuado, tente novamente!!'); location.href='../html/cadastro.php';</script>");
        }else{
        $inserir = "INSERT INTO usuario(CPD, Nome, IDCurso, Semestre, Telefone, Email, Senha) VALUES ($cpd, '$nome', $idcurso, $semestre, '$telefone', '$email', '$senha')";
        $env = mysqli_query($co, $inserir) or die("erro");
            if(!$env){
                        echo ("<script>alert('Cadastro Não Efetuado, tente novamente!!'); location.href='../html/cadastro.php';</script>");
            
            }else{
                echo "string";
                    echo ("<script>alert('Cadastro Efetuado com Sucesso!!'); location.href='../html/Index.html';</script>");
            }
        }

?>