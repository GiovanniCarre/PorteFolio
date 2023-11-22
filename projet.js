document.addEventListener('DOMContentLoaded', function () {
    // Sélection de l'input search
    var searchInput = document.getElementById('searchInput');

    // Ajout d'un écouteur d'événements sur le changement de la valeur de l'input
    searchInput.addEventListener('input', function () {
        var searchTerm = searchInput.value.toLowerCase(); // Convertir le texte en minuscules pour une correspondance insensible à la casse

        // Sélection de tous les articles de projet
        var projects = document.querySelectorAll('#projects-container article');

        // Parcourir tous les projets pour les filtrer
        projects.forEach(function (project) {
            var projectHTML = project.innerHTML.toLowerCase();
            // Vérifier si le terme de recherche est présent dans le HTML complet du projet
            if (projectHTML.includes(searchTerm)) {
                project.style.display = 'inline-block'; // Afficher le projet
            } else {
                project.style.display = 'none'; // Masquer le projet
            }
        });
    });
    
    themeFilter.addEventListener('change', filterProjects);

    // Fonction de filtrage des projets
    function filterProjects() {
        var searchTerm = searchInput.value.toLowerCase(); // Convertir le texte en minuscules pour une correspondance insensible à la casse
        var selectedTheme = themeFilter.value.toLowerCase(); // Convertir le thème sélectionné en minuscules

        // Sélection de tous les articles de projet
        var projects = document.querySelectorAll('#projects-container article');

        // Parcourir tous les projets pour les filtrer
        projects.forEach(function (project) {
            var projectHTML = project.innerHTML.toLowerCase();
            var projectTheme = project.querySelector('.theme').textContent.toLowerCase();

            // Vérifier si le terme de recherche est présent dans le HTML complet du projet
            // et si le thème correspond au thème sélectionné ou si le thème sélectionné est "Tous les thèmes"
            if (
                projectHTML.includes(searchTerm) &&
                (selectedTheme === 'all' || projectTheme.includes(selectedTheme))
            ) {
                project.style.display = 'inline-block'; // Afficher le projet
            } else {
                project.style.display = 'none'; // Masquer le projet
            }
        });
    }
});
