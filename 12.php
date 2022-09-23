<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>

<body>
    <h1>Correction exercice 5</h1>

</body>

<?php

class Utilisateur
{
    // Déclaration des propriétés de la classe
    protected $nom;
    protected $prenom;
    protected $pseudo;
    protected $isAdmin = false;

    function __construct($nom, $prenom, $pseudo, $isAdmin)
    {
        $this->setNom($nom); // équivaut à $this->nom = $nom;
        $this->setPrenom($prenom);
        $this->setPseudo($pseudo);
        $this->setIsAdmin($isAdmin);
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getPseudo()
    {
        return $this->pseudo;
    }

    function getIsAdmin()
    {
        return $this->isAdmin;
    }

    // Création de la fonction d'affiche des informations.
    function afficherInfos()
    {
        if ($this->getIsAdmin() == true) {
            echo $this->getNom() . " " . $this->getPrenom() . " dont le pseudo est " . $this->getPseudo() . " est un Admin. <br/>";
        } else {
            echo $this->getNom() . " " . $this->getPrenom() . " dont le pseudo est " . $this->getPseudo() . " est un simple utilisateur. <br/>";
        }
    }
}

class Client extends Utilisateur
{
    private $ville;
    private $departement;
    private $pays;

    function __construct($nom, $prenom, $pseudo, $isAdmin, $ville, $departement, $pays)
    {
        $this->setNom($nom); // équivaut à $this->nom = $nom;
        $this->setPrenom($prenom);
        $this->setPseudo($pseudo);
        $this->setIsAdmin($isAdmin);
        $this->setVille($ville);
        $this->setDepartement($departement);
        $this->setPays($pays);
    }

    function setVille($ville)
    {
        $this->ville = $ville;
    }

    function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    function setPays($pays)
    {
        $this->pays = $pays;
    }

    function getVille()
    {
        return $this->ville;
    }

    function getDepartement()
    {
        return $this->departement;
    }

    function getPays()
    {
        return $this->pays;
    }

    function localisation()
    {
        echo $this->getVille() . " " . $this->getDepartement() . " " . $this->getPays();
        echo "<br/>";
        $this->afficherInfos();
    }
}

class Administrateur extends Utilisateur
{
    function __construct($nom, $prenom, $pseudo, $isAdmin)
    {
        $this->setNom($nom); // équivaut à $this->nom = $nom;
        $this->setPrenom($prenom);
        $this->setPseudo($pseudo);

        $this->isAdmin = true; // équivaut $this->setIsAdmin(true);
    }
}

// Test d'un objet de type utilisateur
$user = new Utilisateur("Sagaf", "Youssouf", "yosagaf@", false);
$user->afficherInfos();

// Test d'un objet de type Client
$client = new Client("Julien", "Delancourt", "jul34@", false, "Paris", "Ile-de-France", "France");
$client->localisation();
/*
echo "<br/>Nom      = " . $client->getNom();
echo "<br/>Prenom   = " . $client->getPrenom();
echo "<br/>Pseudo   = " . $client->getPseudo();
echo "<br/>Ville    = " . $client->getVille();
echo "<br/>Département = " . $client->getDepartement();
echo "<br/>Pays     = " . $client->getPays();
*/

// Test d'un objet de type Administrateur
$admin = new Administrateur("Marie", "Jo", "jmari@", true);
$admin->afficherInfos();


?>

</html>