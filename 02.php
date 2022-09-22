<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <h1>Les constructeurs et destructeurs.</h1>
    <p>Les constructeurs sont des méthodes qui sont appelés automatiquement lors de la création d'un objet.</p>
    <p>Les destructeurs sont appelés à la fin de l'exécution du script.</p>
    <?php
    class Ville
    {
        private $nom;
        private $dep;

        function __construct()
        {
            echo "Je suis le constructeur, et on m'appelle lors de la création de l'objet <br/>";
            $this->nom = "";
            $this->dep = "";
        }

        function __destruct()
        {
            echo "Je suis le destructeur, et on m'appelle à la fin du script<br/>";
            $this->nom = "";
            $this->dep = "";
        }

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
            echo "La ville de " . $this->getNom() . " est dans le département " . $this->getDep() . "<br/>";
        }
    }

    $villeDeParis = new Ville();
    $villeDeParis->afficherInfosVille();

    $villeDeParis->setNom("Paris");
    $villeDeParis->setDep("Ile-de-France");
    $villeDeParis->afficherInfosVille();

    $villeDeParis->afficherInfosVille();

    ?>

</body>

</html>