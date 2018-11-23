<?php
    include('../php/sessao_usuario.php');
    include('../php/perfil.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/Logo1.jpg">

</head>
<body class="cor-pg">
				<nav class="navbar navbar-expand-lg navbar-light cor-nav">
				  <a class="navbar-brand" href="index.php">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
        
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.php">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.php">Lançar Duvida</a>
				        </div>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="index.php">Home</a></button>
				    </form>
				  </div>
				</nav>
<div class="container">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="../img/logo1.jpg" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php 
                                                  echo $user['n']; 
                                         ?>
                                                	
                                     </a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)"></a> IzPoints <?php echo $user['p']; ?></h6>
                                    <h6 class="d-block"><a href="javascript:void(0)"></a> Perguntas Respondidas</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Meus Dados</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                       
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nome Completo</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php 
                                                  echo $user['n']; 
                                                ?>
                                            </div>
                                        </div>
                                        <?php ?>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Curso</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $user['c'];?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Semestre</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $user['s'];?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Telefone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $user['t'];?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $user['e'];?>
                                            </div>
                                        </div>
                                        <hr />
                                        <button type="submit" class="btn btn-primary mb-2 bg-light"><a href="Altercadastro.php">Editar Dados</a></button>
                                        <button type="submit" class="btn btn-primary mb-2 bg-light"><a href="Deletaruser.php">Deletar Usuario</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>