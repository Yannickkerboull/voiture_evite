<?php
/**
 * Created by PhpStorm.
 * User: Yannick
 * Date: 05/07/2016
 * Time: 11:48
 */



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Voiture</title>
    <link rel="stylesheet" href="styles/style1.css" type="text/css" />
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/script_menu.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Start Jquery Game's</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll" id="master">
                        <a href="#master" id="master">master</a>
                    </li>
                    <li class="page-scroll" id="voiture_simple">
                        <a href="#voiture_simple">voiture_simple</a>
                    </li>
                    <li class="page-scroll" id="about">
                        <a href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id ="voiture_simple_">
        <div  id="jeu" class="text-center">
            <img id="fond1" class="fond" src="./imgs/route.png">
            <img id="fond2" class="fond" src="./imgs/route.png">
            <img id="vj" src="./imgs/vj.png"> <!-- La voiture jaune -->
            <img id="vr" src="./imgs/vr.png"> <!-- La voiture rouge -->
            <img id="bl" src="./imgs/bl.png">
            <img id="ok" src="./imgs/ok.png">
        </div>
        <div class="col-xs-1 text-center">
            <a id="gauche"><button class="btn btn-success btn-lg" >g</button></a>
        </div>
        <div id="affichage" class="col-xs-10 text-center">
            <p>
                Collisions : <span id="info">0</span><br>
                Score: <span id="result"> 0 </span>pts<br>
                Temps de jeu: <span id="temps">0</span> s<br>
                Vie de la voiture : <span id="life"> 10 </span>
            </p>
        </div>
        <div class="col-xs-1 text-center">
            <a id="droite"><button class="btn btn-warning btn-lg" >d</button></a>
        </div>
    </section>
    <br>
    <section id="master_">
        Affichage de base
    </section>

</body>
</html>
