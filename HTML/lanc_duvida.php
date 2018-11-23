<?php
    include('../php/lancarDuvida.php');
    include('../php/rank.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pergunta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/normalize.css">
     <link rel="stylesheet" href="../css/styles.css">
     <link rel="shortcut icon" type="image/x-icon" href="../Img/Logo1.jpg">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body class="cor-pg">
    <nav class="navbar navbar-expand-lg navbar-light cor-nav">
        <a class="navbar-brand" href="index.php">Home</a>
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
                    <a class="nav-link" href="Rank.php">Ranking</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Duvidas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="duv_lancadas.php">Duvidas Lançadas</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="index.php">HOME</button>
            </form>
        </div>
    </nav>
    <div class="corpo">
        <div class="wrapper">
        <form method="post" class="form">
            <div class="col form-group">
                <h1>Pergunta</h1>
                <label for="Pergunta" class=""></label>
                <textarea class="form-control" name="Pergunta" id="Pergunta" rows="2"></textarea>
            </div>
            <div class="col">
                <select id="cursos" name="curso"> 
                         <?php 
                            $meucurso = $busc["CursoID"];
                            while($linha = mysqli_fetch_assoc($ins)){
                                $c_p = $linha["CursoID"];
                                if($meucurso == $c_p){
                        ?>
                            <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>
                            <div>
                                <p class="name-help">Por favor informe seu Curso.</p>
                            </div>
                            <?php
                            }else{
                            ?>  
                             <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>                   
                            <?php 
                                }
                            }
                         ?>
                     </select>
            </div>
            <div class="col cent">
                <input type="submit" class="submit" value="Enviar">

            </div>
        </div>
</body>

</html>