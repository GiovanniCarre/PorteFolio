<!DOCTYPE html>

<html lang="fr">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="projetPresentation.css">
        <link href="img/icone.png" rel="icon">
        <title>Giovanni CARRE - Portfolio</title>
    </head>
    
    <body>
        
        <?php include('header.html');?>
        
        
        <?php include('Projet/ProjetObjet.php');?>
        <section>
            
            <a href="projets.php"><p id='listButton' >   Retour à la liste de projets</p></a>
            <h1><?php if (isset($_GET['nom'])) echo $_GET['nom'];?></h1>
            <?php
                foreach ($projets as $projet) {
                    if ($projet->getNom() == $_GET['nom']){
                        $projetActual = $projet;
                        break;
                    }
                }
                if (!isset($projetActual))
                    exit;
            ?>
            
            <img id='img' src='Projet/<?php echo $projetActual->getImage()?>' alt='Représentation du projet'>
            <br>
            <a href='<?php echo $projetActual->getGithub()?>'><p class="Button" id='buttonLeft'>Allez voir le GitHub</p></a>
            
            <a target="_blank" href='Projet/<?php echo $projetActual->getPDF()?>'><p class='Button' id='buttonRight'>Voir le rapport</p></a>
        </section>
    </body>

</html>

