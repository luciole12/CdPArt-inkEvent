<?php include("lang.php");?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil Art'ink Tattoo</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/style-menu-footer.css">
        <link href="img/logos/favicon.png" rel="icon">
    </head>
    
<body>
    
<!--menu-->
    <header>
        
        <?php include("menu.php");?>
    </header>

<!--bannière-->
        <div class="containerBanniere">
            <img src="img/banniere.png" alt="Bannière Art'Ink" id="banniere">
            <div class="texteBanniere">
                <p><?php echo titreun;?><couleur> 30, 1 & 2 juillet 2022</couleur></p>
                <p>- Place du Breuil -</p>
            </div>
        </div>

<!--introduction-->
        <div class="textCentre">
            <h2><?php echo intro;?></h2>
        </div>

<!--bouton billeterie-->
        <div id="containerBouton">
            <a href="billetterie.php"><button><span><?php echo billetterie;?></span></button></a>
        </div>
        
<!--icone activités-->
        <div class="flexActivites">
            <article>
                <img src="img/icones/stand.png" width="80vw" alt="Image1">
                <p><?php echo nbstands;?></p>
            </article>
            <article>
                <img src="img/icones/tatoueurs.png" width="80vw" alt="Image2">
                <p><?php echo nbtatouers;?></p>
            </article>
            <article>
                <img src="img/icones/percing.png" width="80vw" alt="Image3">
                <p><?php echo nbperceurs;?></p>
            </article>
            <article>
                <img src="img/icones/dessin.png" width="80vw" alt="Image4">
                <p><?php echo nbdessinatrices;?></p>
            </article>
        </div>

    <!--texte présentation des activités-->
        <section class="festivite">
            <h2><?php echo joursfestivités;?></h2>
            <p><?php echo progtechno?></p>
        </section>
        
    <!--texte présentation suspending-->
        <section class="suspend">
            <h2><?php echo titresuspending?></h2>
            <h4><?php echo soustitresuspending?></h4>
            <img src="img/suspending.png" width="90%">
            <p><?php echo explicationsuspending?></p>
        </section>

    <!--texte présentation des concerts-->
        <section class="suspend">
            <h2><?php echo concerts?></h2>
            <img src="img/concert.png" alt="Image d'un concert" width="90%" >
        </section>
        <div id="scroll_to_top">
            <a href="#top"><img src="img/icones/fleche.png" alt="Retourner en haut" /></a>
        </div>
    <!--footer-->
    <footer>
        <?php include("footer.php")?>
    </footer>

</body>
</html>