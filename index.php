<!DOCTYPE html>

<html lang='fr'>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="accueil.css">
        <link href="img/icone.png" rel="icon">
        <title>Giovanni CARRE - Portfolio</title>
    </head>
    <body>
        <?php include('header.html');?>
        <section id='presentation'>
            <img id='photoPresentation' alt='Photo de Giovanni CARRE' src='img/1.webp'>
            <div id='presentationPanelLeft'>
                <p id='NomPrenom'>Giovanni CARRE</p>
                <p id='etudiantTxt'>Je suis étudiant en</p>
                <p id='master1Txt'>Master 1 Informatique IA</p>
                <p id='presentationTXT'>Titulaire d'une licence en informatique généraliste avec mention AB de l'université de Belle-Beille à Angers.<br>Ma passion pour le développement s'est ancrée en moi depuis de nombreuses années, guidant ainsi mon choix de carrière. Je me trouve à présent dans la première année de mon Master au sein de la faculté des sciences d'Angers, où je poursuis un cursus axé sur l'intelligence artificielle. </p>
                <br>
                <a class='Button' id='CVButton' href='Giovanni_CARRE_CV.pdf'>Mon CV</a>
            </div>
        </section>
        <section id="Apropos">
            <img id='photoPresentation2' alt='photo de Présentation' src="img/presentationImg.webp">
            <div id="AproposRightPanel">
                <h1>A <span class="couleur3">propos</span></h1>
                <h3 id='Bonjour'>Bonjour ! Je suis Giovanni CARRE.</h3>
                <p>
                    En recherche d'un stage en développement informatique de 2 à 5 mois à partir d'avril 2023.
                    J'ai réalisé plusieurs projets que vous pouvez voir, notamment un site de recettes de cuisine pour sportifs : 
                    <a href='https://www.sportcooks.fr/'>www.sportcooks.fr</a>
                </p>
                <div class="socials">
                    <a href="https://www.linkedin.com/in/giovanni-carre-79500222b/?originalSubdomain=fr"><img src="img/linkedln.png" width="40px" /></a>
                    <a href="https://github.com/Lakyous"><img src="img/github.png" width="40px" /></a>
                </div>
            </div>
        </section>
        
        <section class="services">
            <h1 class="couleur3">Mes principaux projets</h1>
            <p><a href='projets'> ==> Pour tous les voir <== </a></p>
            <br>
            <br>
            <br>
            <br>
            <div id="principauxProjetsPanel">
                <a href='projetNom.php?nom=SportCooks%20-%20site%20de%20recettes%20de%20cuisine'>
                <div class="projetsPrincipaux">
                    <h2>Dévelopement Web</h2>
                    <p class='pPrincipauxProjets'>
                        SportCooks : site de recettes pour sportifs
                    </p>
                </div></a>
                <br class='brACacher'>
                <div class="projetsPrincipaux">
                    <a href="projetNom.php?nom=Concours d'IA d'apprentissage (1ère place)">
                    <h2>Intelligence Artificielle</h2>
                    <p class='pPrincipauxProjets'>
                        Algorithme de MonteCarlo optimisé pour le jeu d'Hex en C++.
                    </p></a>
                </div>
                <br class='brACacher'>
                <a href="projetNom.php?nom=Simulation d'algorithme A* graphique">
                <div class="projetsPrincipaux">
                    <h2>Algorithmie</h2>
                    <p class='pPrincipauxProjets'>
                        Démonstration de A* en JAVA 17
                    </p>
                </div>
                </a>
            </div>
            <br>
            <br>
            <br>
            <br>
            
        </section>
    </body>
</html>