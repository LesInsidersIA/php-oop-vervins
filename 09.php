<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
</head>

<body>
    <h1>Les classes abstraites (abstract class)</h1>
    <p>On parle de classe abstraite, lorsqu'on a une classe parent qui a une méthode abstraite mais
        l'implémentation de la méthode abstraite est faite dans les classes enfant.
    </p>

    <p>On utilise le mot clé <code>abstract</code> pour définir une classe abstraite ou une méthode abstraite.</p>

</body>

<?php


// Class parent (parent class)

abstract class Personne
{
    protected $nom;

    function __construct($nom)
    {
        $this->nom = $nom;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    abstract public function afficherInfos();
}

// Class enfant (child class)
class Informaticien extends Personne
{
    public function afficherInfos()
    {
        echo "Bonjour " . $this->getNom() . ", tu es informaticien <br/>";
    }
}

// Class enfant (child class)
class Developpeur extends Personne
{
    public function afficherInfos()
    {
        echo "Bonjour " . $this->getNom() . ", tu es developpeur. <br/>";
    }
}

$informaticien = new Informaticien("Sagaf");
$informaticien->afficherInfos();

$developpeur = new Developpeur("Julien");
$developpeur->afficherInfos();


?>

</html>