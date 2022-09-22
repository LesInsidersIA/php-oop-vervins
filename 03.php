<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
    <style>
        .main-container {
            width: 40%;
            margin: auto;
            background-color: whitesmoke;
            display: flex;
            flex-direction: column;
            padding: 50px;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <?php

    /**Exercice 2 :
	Créer une classe Rectangle qui a comme propriété la longueur et la largeur.
	Implémenter un constructeur qui initialise la longueur est la largeur à 0 et le destructeur qui affiche "Fin de l'exécution du script".
	Implémenter les setteurs et les guetteurs qui vont avec.
	Créer une méthode permettant de calculer et retourner le périmètre d'un rectangle.
	Créer une méthode permettant de calculer et retourner l'aire du rectangle.
	Instancier un objet et tester les deux fonctions.
	Créer une fonction permettant d'afficher le message suivant: 
	"Le périmètre et l'aire du rectangle dont la longueur est égale à L et la largeur est égale à l sont respectivement X et Y". 
	Créer un formulaire avec les champs de saisis de la longueur et de la largeur, récupérer ces valeurs via la méthode POST pour procéder aux calculs précédents.
	Afficher l'aire et le périmètre dans des spans.
     */

    class Rectangle
    {
        private $longueur;
        private $largeur;

        function __construct()
        {
            $this->longueur = 0;
            $this->largeur = 0;
            //echo "Je suis le constructeur <br/>";
        }

        function __destruct()
        {
            //echo "Fin de l'exécution du script. <br/>";
            echo "";
        }

        // Implémentation des setteurs (modificateurs)
        function setLongueur($longueur)
        {
            $this->longueur = $longueur;
        }

        function setLargeur($largeur)
        {
            $this->largeur = $largeur;
        }

        // Implémentation des guetteurs
        function getLongueur()
        {
            return $this->longueur;
        }

        function getLargeur()
        {
            return $this->largeur;
        }

        // Méthode de calcule du périmètre d'un rectangle
        function calculePerimetre($longueur, $largeur)
        {
            return (($longueur + $largeur) * 2);
        }

        //Méthode de calcule de l'aire
        function calculeAire($longueur, $largeur)
        {
            return ($longueur * $largeur);
        }

        //Méthode d'affichage du message
        function afficherMsg()
        {
            echo "Le périmètre et l'aire du rectangle dont la longueur est égale à " . $this->getLongueur() . " et la largeur est égale "
                . $this->getLargeur() . " sont respectivement " . $this->calculePerimetre($this->getLongueur(), $this->getLargeur()) .
                " et " . $this->calculeAire($this->getLongueur(), $this->getLargeur()) . " <br/>";
        }
    }

    /*
    echo "La longueur de mon rectangle est égale à " . $r1->getLongueur() . "<br/>";
    echo "La largeur de mon rectangle est égale à " . $r1->getLargeur() . "<br/>";
    */


    //$r1->afficherMsg();
    $aire = $perimetre = $vLongueur = $vLargeur = "";
    if (isset($_POST['longueur']) && isset($_POST['largeur'])) {
        if (is_numeric(intval($_POST['longueur'])) && is_numeric(intval($_POST['largeur']))) {
            $r1 = new Rectangle();
            $r1->setLongueur($_POST['longueur']);
            $r1->setLargeur($_POST['largeur']);
            $vLongueur = $r1->getLongueur();
            $vLargeur = $r1->getLargeur();
            $perimetre = $r1->calculePerimetre($r1->getLongueur(), $r1->getLargeur());
            //echo "Le perimètre du rectangle = " . $perimetre . "<br/>";

            $aire = $r1->calculeAire($r1->getLongueur(), $r1->getLargeur());
            //echo "L'aire du rectangle = " . $aire . "<br/>";
        } else {
            echo "Les valeurs données ne sont pas des nombres <br/>";
        }
    }
    ?>

    <div class="main-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table>
                <tr>
                    <td><label>Longueur</label></td>
                    <td><input type="text" name="longueur" value="<?php echo $vLongueur; ?>"></td>

                </tr>

                <tr>
                    <td><label>Largeur</label></td>
                    <td><input type="text" name="largeur" value="<?php echo $vLargeur; ?>"></td>
                </tr>

                <tr>
                    <td><span style='color:blue;'><?php echo "Le perimètre est égale à " . $perimetre ?></span></td>
                </tr>

                <tr>
                    <td><span style='color:blue;'><?php echo "L'aire est égale à " . $aire ?></span></td>
                </tr>

                <tr>
                    <td><input class="submit-btn" type="submit" name="submit-btn" value="Valider"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>