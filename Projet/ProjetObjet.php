<?php

class Projet
{
    private $nom;
    private $description;
    private $date;
    private $github;
    private $pdf;
    private $image;
    private $technologies;
    private $theme;

    public function __construct($nom, $description, $date, $github, $pdf, $image, $technologies, $theme)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->date = $date;
        $this->github = $github;
        $this->pdf = $pdf;
        $this->image = $image;
        $this->technologies = $technologies;
        $this->theme = $theme;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getGithub()
    {
        return $this->github;
    }

    public function getPdf()
    {
        return $this->pdf;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getTechnologies()
    {
        return $this->technologies;
    }

    public function getTheme()
    {
        return $this->theme;
    }
    public function toArray()
    {
        // Convertit l'objet en un tableau associatif
        return get_object_vars($this);
    }
    
}

// Charge le contenu du fichier JSON
$jsonContent = file_get_contents('Projet/Projet.json');
$projectsData = json_decode($jsonContent, true);

// Vérifie si le décodage JSON a réussi
if ($projectsData === null) {
    die('Erreur lors de la lecture du fichier JSON.');
}

// Crée des objets Projet à partir des données JSON
$projets = [];
foreach ($projectsData as $data) {
    $projet = new Projet(
        $data['nom'],
        $data['description'],
        $data['date'],
        $data['github'],
        $data['pdf'],
        $data['image'],
        $data['technologies'],
        $data['theme']
    );

    $projets[] = $projet;
}


?>
