<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>

        <!--link bootstrap-->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />

        <!--link do icomoon--> 
        <link rel="stylesheet" href="plugins/icomoon/icomoon.css.css" />

        <!--link do css-->
        <link rel="stylesheet" href="assets/css/stylo.css" />

    </head>
    <body>

        <!--header-->   
        <header class="container-fluid">

            <!--barra de navegação-->
    
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
                <a class="navbar-brand" href="?pg=inicio"><spam class="vic-table_rows"></spam></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">                        
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos">PRODUTOS</a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=sobre">SOBRE</a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=serviços">SERVIÇOS</a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato">CONTATOS</a></li> 
                        <li class="nav-item active"><a class="nav-link" href="?pg=login">LOGIN</a></li> 
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                    <ul class="navbar-nav mr">                                             
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Area administrativa                                
                            </a>
                            <div class="dropdown-menu" aria-lab elledby="navbarDropdown">
                                <a class="dropdown-item" href="?pg=login2">LOGIN 1</a>
                                <a class="dropdown-item" href="?pg=login2">LOGIN 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?pg=login3">LOGIN 3</a>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </nav> 
            <!--fim da barra de navegação-->

            <!--slides-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" ></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/img1.jpeg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/1440x200.png" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/img3.jpg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
            <!--fim dos slides-->

        </header>
        <!--fim do header-->
