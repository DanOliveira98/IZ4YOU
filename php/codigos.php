<?php
	$conexao = mysqli_connect("localhost","root","1234","iz4you"); 
	if(mysqli_connect_errno()){
        die("Conexao Falhou: ". mysqli_connect_errno);  
    }

    class Cadastro{
    	private $cpd;
    	private $nome;
    	private $telefone;
    	private $idcurso;
    	private $email;
    	private $senha;
    	private $conf_senha;
    	private $semestre;
    	public function RecCadastrar($_cpd, $_nome, $_idcurso, $_semestre, $_telefone, $_email, $_senha, $_conf_senha){
    	if ($_senha == $_conf_senha) {
    		$this->senha = $_senha;
    	}else{
    		die();
    		$conf = ("Senhas não conferem!");
    	}
    	$this->cpd = $_cpd;
    	$this->nome = $_nome;
    	$this->idcurso = $_idcurso;
    	$this->telefone = $_telefone;
    	$this->semestre = $_semestre;
    	$this->email = $_email;
    	}
    	public function EnvCadastro(){
    		$testecpd = "SELECT * from usuario where cpd = $this->cpd";
    		$tst = mysqli_query($conexao, $testecpd);
    		$tst = mysqli_fetch_assoc($tst);
    		if($this->cpd = $tst['cpd']){
    			die("CPD já Utilizado!");
    		}else{
    			$inserir = "INSERT INTO usuario (CPD, Nome, CursoID, Semestre, Telefone, Email, Senha) VALUES ($this->cpd, $this->nome, $this->idcurso, $this->semestre, $this->telefone, $this->email, md5($this->senha)";
    		}
			$operacao_inser = mysqli_query($conexao, $inserir);
				if(!$operacao_inser){
					die("Não foi efetuado a inserção");
				}
    	}



    }
