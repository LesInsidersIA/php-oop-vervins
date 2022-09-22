<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>

<body>
    <h1>Les <code>traits</code></h1>
    <p>PHP ne supporte pas l'héritage multiple.</p>
    <p>Pour faire en sorte qu'une classe hérite de plusieurs classes, on utilise les traits.</p>
    <p>On déclare une classe <code>trait</code>, en utilisant le mot clé <code>trait</code> à la place du mot clé <code>class</code></p>

    <?php
    trait Formateur
    {
        function msgFormateur()
        {
            echo "Je suis formateur <br/>";
        }
    }


    trait Etudiant
    {
        function msgEtudiant()
        {
            echo "Je suis étudiant <br/>";
        }
    }

    class Developpeur
    {
        use Formateur;
        use Etudiant;
    }

    $dev = new Developpeur();
    $dev->msgFormateur();
    $dev->msgEtudiant();

    ?>
</body>

</html>