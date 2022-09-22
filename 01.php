<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <h1>La programmation orienté objet :</h1>

    <h2>La programmation procédurale vs la programmation orienté objet</h2>
    <h3>La programmation procédurale :</h3>
    Dans la programmation procédurale, les données et les traitements (fonctions) des données sont séparées.

    <h3>La programmation orientée objet :</h3>
    Avec la programmation, on va écrire des fonctions qui vont procéder des modifications/traitements sur des données,
    tandis que la P00, on va créer des objets qui vont contenir à la fois les données et les fonctions qui
    modifient ces données.
    <h3>Avantages de la POO</h3>
    <ul>
        <ul>OOP : signifie orientée objet</ul>
        <li>L'orientée objet offre un structure assez claire du code.</li>
        <li>La reutilisation du code et la non répétition du code</li>
    </ul>

    <h2>Classe et objet :</h2>
    La classe représente le template (le modèle) et l'objet représente l'instance (ce que l'on
    crée à partir de la classe). Une instance est un objet et l'instanciation représente le processus de
    création d'un objet à partir de la classe.

    <p>
        Pour créer une classe, on utilise le mot clé class suivi du nom de la class et d'accolades:
        Attention : le nom de la classe commence toujours par une lettre en majuscule.
    </p>

    <h3>Illustration en code classe et objet</h3>

    <?php

    class Voiture
    {
        // Les attributs
        private $couleur;
        private $modele;
        private $plaque;

        // Les méthodes
        function demarrer()
        {
            echo "La voiture dont la plaque est le " . $this->plaque . "démarre <br/>";
        }

        function freiner()
        {
            echo "La voiture freine <br/>";
        }

        function changerCouleur($maCouleur)
        {
            $this->couleur = $maCouleur;
        }

        // Cette fonction setteur est la fonction qui va se charger de changer la couleur
        function setCouleur($couleur)
        {
            $this->couleur = $couleur;
        }

        // Cette fonction setteur est la fonction qui va se charger de changer le modèle
        function setModele($modele)
        {
            $this->modele = $modele;
        }

        // Cette fonction setteur est la fonction qui va se charger de changer la plaque de la voiture
        function setPlaque($plaque)
        {
            $this->plaque = $plaque;
        }

        // Cette fonction getteur retourne la valeur de l'attribut couleur
        function getCouleur()
        {
            return $this->couleur;
        }

        // Cette fonction getteur retourne la valeur de l'attribut modele
        function getModele()
        {
            return $this->modele;
        }

        // Cette fonction getteur retourne la valeur de l'attribut plaque
        function getPlaque()
        {
            return $this->plaque;
        }
    }

    $v1 = new Voiture();
    $v1->setCouleur("rouge");
    $v1->setModele("Peugeot");
    $v1->setPlaque("AA3423");
    echo "La voiture v1 est un modèle " . $v1->getModele() . " dont la couleur est " . $v1->getCouleur() . " est la plaque " . $v1->getPlaque() . "<br/>";

    $v2 = new Voiture();
    $v2->setCouleur("bleu");
    $v2->setModele("Renault");
    $v2->setPlaque("BB3R423");
    echo "La voiture v2 est un modèle " . $v2->getModele() . " dont la couleur est " . $v2->getCouleur() . " est la plaque " . $v2->getPlaque() . "<br/>";


    /*
    // Instanciation (création d'un objet à partir d'un classe)
    $maTwingo = new Voiture();
    echo "La couleur de ma twingo est : " . $maTwingo->couleur . "</br>";
    echo "Le modèle est : " . $maTwingo->modele . "</br>";
    echo "La plaque de ma twingo est : " . $maTwingo->plague . "</br>";

    $maBM = new Voiture();
    echo "La couleur de ma BM est : " . $maTwingo->couleur . "</br>";
    echo "Le modèle est : " . $maTwingo->modele . "</br>";
    echo "La plaque de ma BM est : " . $maTwingo->plague . "</br>";
    */
    ?>
    <h3>Exercice sur les classes et objet</h3>
    <p>Écrivez une classe représentant une ville. Elle doit avoir les propriétés nom et département et une méthode affichant
        « la ville X est dans le département Y ». Créez des objets ville, affectez leurs propriétés, et utilisez la méthode d’affichage.</p>

    <?php
    class Ville
    {
        private $nom;
        private $dep;

        function setNom($nom)
        {
            $this->nom = $nom;
        }

        function setDep($dep)
        {
            $this->dep = $dep;
        }

        function getNom()
        {
            return $this->nom;
        }

        function getDep()
        {
            return $this->dep;
        }

        function afficherInfosVille()
        {
            echo "La vile de " . $this->getNom() . " est dans le département " . $this->getDep() . "<br/>";
        }
    }

    $villeDeParis = new Ville();
    $villeDeParis->setNom("Paris");
    $villeDeParis->setDep("Ile-de-France");
    $villeDeParis->afficherInfosVille();

    ?>
</body>

</html>