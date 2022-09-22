<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>

<body>
    <?php
    class Personne
    {
        private $nom;
        private $prenom;
        private $adresse;

        function __construct($nom, $prenom, $adresse)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
        }

        function __destruct()
        {
            echo "<script type=\"text/javascript\">alert('Voulez-vous supprimer votre contact $this->nom $this->prenom')</script>";
        }

        function getPersonne()
        {
            return $this->nom . ' ' . $this->prenom . ' ' . $this->adresse;
        }

        function setAdress($adresse)
        {
            $this->adresse = $adresse;
        }
    }



    $p1 = new Personne('Sagaf', 'Youssouf', '23 Rue de la Corniche 75000 Paris');
    echo "Voici votre contact " . $p1->getPersonne();
    $p1->setAdress("81 Rue Jean Lolive 93240 Stains");
    echo "<br/>";
    echo "Voici votre contact " . $p1->getPersonne();
    unset($p1);

    ?>
</body>

</html>