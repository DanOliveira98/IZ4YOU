<?php
        include('../php/Duvidas_lan.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Perguntas Cadastradas</title>
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
        <a class="navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
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
                        <a class="dropdown-item" href="lanc_duvida.php">Lançar Duvida</a>
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
     <?php 

                            while($linha = mysqli_fetch_assoc($perg)){
                        ?>     
                <div class="container">
                <div class="row">
                <div class="col">
                <table class="table table-bordered table-striped table-hover cor-nav">
                <thead class="bg-dark btn-secundary cor-nav">
                <th class="format-itens"><?php echo utf8_encode($linha["n"]) ?></th>
                <th><textarea class="form-control name" name="Pergunta" id="Pergunta" rows="2"><?php echo utf8_encode($linha["d"]) ?></textarea></th>
                <th><?php echo utf8_encode($linha["c"]) ?></th>
                </thead>
                </table>
                </div> 
                </div>
                </div>  
                            <?php
                                }
                                ?>
</div>
</body>
</html>