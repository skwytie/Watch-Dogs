<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="./css/style.css"/>
    <link href = " http://fonts.cdnfonts.com/css/doctor-glitch " rel = "stylesheet" >
    <title>Watch Dogs : Legion</title>
</head>

<body onload = "myFunction()">

<div id="load">
    <img src="./img/logo.png" alt= "logo">
</div>

<div id="myDiv">
    <div class="fond">
    <div class ="video">
        <video autoplay loop muted>
            <source src= "./video/videoaccueil.mp4" type="video/mp4">
        </video>
    </div>
        
    <!-- barre de navigation -->

  <?php include "./include/nav-accueil.php" ; ?>

<!-- fin de la barre de navigation -->

<section class="premier-bloc">
<h1>Bienvenue dans la résistance !</h1>  

<div class="container">
    <p>Surveillance de masse, milices privées faisant régner l'ordre dans les rues, crime organisé… Assez ! Il est temps de mettre fin à l'oppression. Recrutez des insurgés aux multiples talents pour chasser les profiteurs qui ternissent la splendeur de la ville. Le sort de Londres repose sur vous.</p>
<div class="image">
    <img src="./img/cochon.png" alt="cochon">
</div>
</div>
<hr>
</section>

<section class="grand-titre">
    <h1>REPRENEZ  LONDRES </h1>
    <h3>MONTREZ LEUR QUI COMMANDE</h3>
    <p>Explorez un gigantesque monde ouvert urbain et visitez tous les lieux célèbres de Londres, dont Big Ben, Tower Bridge, Camden, Piccadilly Circus ou encore Whitechapel.</p>
</section>


<section class="londres">
    <div class="bloc">
        <img src="./img/gameplay.jpg" alt="gameplay">
        <p>JOUEZ COMME VOUS LE SENTEZ !</p>        
        <p><b>OU EXPERIMENTER LES DIFFERENTS STYLES</b></p>
        <br>
        <p>Abordez les missions en profitant d'un vaste éventail d'armes, d'un tout nouveau système de combat rapproché ou d'aptitudes d'infiltration. Vos façons d'opérer auront de véritables conséquences. Si vous employez des méthodes non mortelles, l'ennemi tentera de vous maîtriser et de vous arrêter.</p>
    </div>

    <span class="vertical-line"></span>
    <span class="vertical-line"></span>
    
    <div class="blooc">
        <img src="./img/equipe.jpg" alt="wdl">
        <p>UN GROUPE A RASSEMBLER</p>
        <p><b>FLANQUER LA PAGAILLE AVEC VOS AMIS</b></p>
        <br>
        <p>Rendre Londres à ses habitants, ça ne se fait pas tout seul dans son coin. Rejoignez la lutte en ligne et alliez-vous avec jusqu'à trois amis pour découvrir de nouvelles missions coop entièrement inédites, ainsi que du contenu de fin de jeu bourré de défis.</p>
    </div>
</section>
<hr>




<div class="background"></div>



<?php
include "./include/footer.php";
?>

</div>


<script src = "slider.js"></script>
</body>
</html>