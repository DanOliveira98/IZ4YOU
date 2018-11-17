<?php
    include('../php/lancarDuvida.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pergunta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Perfil.php">Perfil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Rank.html">Ranking</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Duvidas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="lanc_duvida.html">Lançar Duvida</a>
                        <a class="dropdown-item" href="duv_lanc.html">Duvidas Lancadas</a>
                        <a class="dropdown-item" href="resp_lanc.html">Respostas Lancadas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Resul_busc.html">Procurar Duvidas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="login.php">ENTRE!</button>
            </form>
        </div>
    </nav>
    <div class="Fazer_pergunta">
        <form method="post">
            <div>
                <label for="Pergunta">Pergunta:</label>
                <input type="text" name="Pergunta" id="Pergunta">
            </div>
            <div>
                <select name="curso" id="curso">
                    <option value="">Curso:</option>
                    <option value="1">Sistemas De Informação</option>
                    <option value="2">Psicologia</option>
                    <option value="3">Direito</option>
                    <option value="4">Odontologia</option>
                    <option value="5">Engenharia Civil</option>
                    <option value="6">Ciencias Contabeis</option>
                    <option value="7">Recursos Humanos</option>
                    <option value="8">Medicina</option>
                    <option value="9">Nutricao</option>
                    <option value="10">Fisioterapia</option>
                    <option value="11">Eduacacao Fisica</option>
                    <option value="12">Arquitetura e Hurbanismo</option>
                    <option value="13">Farmacia</option>
                    <option value="14">Letras</option>
                </select>
            </div>
            <div class="button">
                <button type="submit">Enviar</button>

            </div>
</body>

</html>