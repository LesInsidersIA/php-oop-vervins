<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>

<body>
    <h1>L'encapsulation</h1>
    <p>L'encapsulation permet de contrôler l'endroit où les attributs ou les méthodes d'une classe peuvent être accessible. </p>
    <p>On utilise ce qu'on appelle les modificateurs d'accus (access modifiers). </p>
    <ul>
        <li>private : les méthodes et les attributs sont accessibles UNIQUEMENT au sein de la classe.</li>
        <li>protected : les méthodes et les attributs en protected sont accessibles au sein de la classe et aussi au sein
            des classes dérivés (classe filles) </li>
        <li>public : les méthodes et les attributs sont accessibles partout. C'est le modificateur par défaut.</li>
    </ul>

</body>

<?php

/* PARTIE 1
class Employe
{
    private $matricule = "23423432";
    protected $nom = "Sagaf";
    public $prenom = "Youssouf";

    // Par défaut le modificateur est "public"
    function setMatricule($matricule)
    {
        $this->matricule = $matricule;
        // Avec this, j'ai accès à l'attribut $matricule qui est en private à l'intérieur de ma classe et jamais à l'extérieur.
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
}

$employe1 = new Employe();
//echo "Le matricule " . $employe1->matricule; // ERROR : Cannot access private property Employe::$matricule
//echo "Le nom de l'employé est " . $employe1->nom; // Uncaught Error: Cannot access protected property Employe::$nom
echo "Le prenom de l'employé est " . $employe1->prenom;
*/


class Employe
{
    private $matricule;
    protected $nom;
    public $prenom;

    // Par défaut le modificateur est "public"
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
        // Avec this, j'ai accès à l'attribut $matricule qui est en private à l'intérieur de ma classe et jamais à l'extérieur.
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$employe1 = new Employe();
$employe1->setMatricule("3445345");
echo "Le matricule de l'employ1 = " . $employe1->getMatricule();

?>

</html>