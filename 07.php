<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
</head>

<body>
    <h1>L'héritage (inheritence)</h1>
    <p>L'héritage en POO signifie qu'une classe fille dérive d'une classe mère.</p>
    <p>La classe fille, héritera de tous les attributs et méthodes "public" et "protected" de la classe mère.</p>
    <p>La classe fille peut aussi avoir ses propres attributs et méthodes.</p>
    <p>Une classe fille héritée est définie en utilisant le mot clé 'extends"</p>

    <?php

    // classe mère
    class Personnel
    {
        protected $id;
        protected $nom;
        protected $salaire;

        function __construct($id, $nom, $salaire)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->salaire = $salaire;
        }

        function getId()
        {
            return $this->id;
        }

        function getNom()
        {
            return $this->nom;
        }

        function getSalaire()
        {
            return $this->salaire;
        }

        function setId($id)
        {
            $this->id = $id;
        }

        function setNom($nom)
        {
            $this->nom = $nom;
        }

        function setSalaire($salaire)
        {
            $this->salaire = $salaire;
        }

        function afficherSalaire()
        {
            echo "Votre salaire est de " . $this->getSalaire() . "<br/>";
        }

        function afficherInfos()
        {
            echo "ID = " . $this->getId() . "<br/>";
            echo "Nom = " . $this->getNom() . "<br/>";
            echo "Salaire = " . $this->getSalaire() . "<br/>";
        }
    }

    // classe fille ou dérivé
    class Stagiaire extends Personnel
    {
        private $dureeStage;

        // Surchage du constructeur : on redefinit le constructeur en rajoutant l'attribut dureeStage qui est propre à la classe fille.
        function __construct($id, $nom, $salaire, $dureeStage)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->salaire = $salaire;
            $this->dureeStage = $dureeStage;
        }

        function getDureeStage()
        {
            return $this->dureeStage;
        }

        function setDureeStage($dureeStage)
        {
            $this->dureeStage = $dureeStage;
        }

        function embaucher()
        {
            echo "Je suis embauche <br/>";
        }

        function afficherInfos()
        {
            echo "ID = " . =>getId() . "<br/>";
            echo "Nom = " . $this->getNom() . "<br/>";
            echo "Salaire = " . $this->getSalaire() . "<br/>";
            echo "Durée de stage = " . $this->getDureeStage() . "<br/>";
        }
    }


    $p1 = new Personnel("343434", "Sagaf", 1600);

    // Test des setteurs et des guetteurs pour la classe mère
    echo "Pour l'employé p1 : id = " . $p1->getId() . " , le nom = " .
        $p1->getNom() . " et son salaire = " . $p1->getSalaire() . " euros. <br/>";

    // Test de la fonction afficherSalaire
    $p1->afficherSalaire();
    $p1->afficherInfos();

    // Création d'un objet de la classe fille Stagiaire
    $s1 = new Stagiaire("3435345", "Youssouf", 500, "3 mois");

    // Test des setteurs et des guetteurs pour la classe fille
    echo "Pour l'employé s1 : id = " . $s1->getId() . " , le nom = " .
        $s1->getNom() . " , son salaire = " . $s1->getSalaire() . 
        " euros et sa durée de stage est de " . $s1->getDureeStage() . "/<br/>";

    // Appel de la méthode afficherInfos
    $s1->afficherInfos();

    ?>

</body>

</html>