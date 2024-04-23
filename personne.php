<?php
// Définition de la classe "Personne"
class Personne {
    // Propriétés de la personne
    public $nom;
    public $age;

    // Constructeur de la classe Personne
    public function __construct($nom, $age) {
        // Initialisation des propriétés avec les valeurs passées en paramètres
        $this->nom = $nom;
        $this->age = $age;
    }

    // Méthode pour afficher les informations de la personne
    public function afficherInfos() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Age : " . $this->age . " ans";
    }
}

// Utilisation de la classe Personne

// Création d'un nouvel objet Personne avec un nom et un âge spécifiques
$personne = new Personne("Abdelkader", 61);

// Affichage des informations de la personne en utilisant la méthode afficherInfos()
$personne->afficherInfos();
?>