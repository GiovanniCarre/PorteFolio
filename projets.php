<!DOCTYPE html>
<?php
function generateColorFromText($text) {
    // Obtenir une valeur de hachage MD5
    $hash = md5($text);

    // Prendre une partie du hachage pour la couleur (par exemple, les 6 premiers caractères)
    $color = "#" . substr($hash, 0, 6);

    return $color;
}
?>

<html lang="fr">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="projet.css">
        <link href="img/icone.png" rel="icon">
        <title>Giovanni CARRE - Portfolio</title>
    </head>
    
    <body>
        
        <?php include('header.html');?>
        
        
        <?php include('Projet/ProjetObjet.php');?>
        <section>
            
            <h1>Mes Projets</h1>
            <br>
            <input type="search" id="searchInput" placeholder="Rechercher par nom ou description">
            <br>
            <select id="themeFilter">
                <option value="all" selected>Tous les thèmes</option>
                <option value="IA">IA</option>
                <option value="Web">Web</option>
                <option value="Logiciel">Logiciel</option>
                <option value="Autre">Autre</option>
            </select>

            <br>
            <div id="projects-container">
                <?php 
                    shuffle($projets);
                    foreach ($projets as $projet) {
                        
                        //infos
                        echo '<a href="projetNom.php?nom='.$projet->getNom().'"><article class="projetDiv"><p class="theme">'.$projet->getTheme().'</p><br><div class="panelLeftProjet"><h2 class="titleProjet">'.$projet->getNom().'</h2><p class="descProjet">'.$projet->getDescription().'</p><p class="">';
                        
                        for ($i = 0; $i < count($projet->getTechnologies());$i++){
                            echo '<span style="margin:0px 1em;vertical-align:middle;border-radius:100%;display: inline-block; width: 1em; height: 1em;background-color:'.generateColorFromText($projet->getTechnologies()[$i]).';"></span>'.$projet->getTechnologies()[$i];
                        }
                        
                        echo '</p><p class="date">'.$projet->getDate().'</p><a class="LinkGit" href="'.$projet->getGithub().'"><img class="imgGit" title="Accéder au GitHub" alt="Accéder au GitHub" src="img/github.png"></a>
                        </div>';
                        
                        //img
                        echo '<div class="panelRightProjet"><img class="imgProjet" src="Projet/'.$projet->getImage().'" alt=""></div></article></a>';
                    }
                
                ?>
            </div>
        </section>
    </body>

</html>
<script src='projet.js'></script>