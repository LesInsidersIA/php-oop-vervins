<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
</head>

<body>
    <h1>Les constantes de classe.</h1>
    <p>LEs constantes sont des variables dont leurs valeurs ne peuvent pas être modifiées.</p>
    <p>Si vous avez besoin de définir une constante de classe, vous pouvez utiliser les constantes de classe.</p>
    <p>On définit une constante de classe en utilise le mot clé <code>const</code> à l'intérieur de la classe.</p>
    <p>Les constantes sont sensible à la casse et il est recommandé de les nommer en majuscule.</p>
    <p>Pour accéder à la valeur d'une constante à l'extérieur de la classe, on utilise l'opérateur <code>::</code> suivi du nom
        de la constante.</p>

</body>

<?php

class Website
{
    // Définition d'une constante de classe 
    const URL_WEBSITE = "https://www.m2iformation.fr/";

    function afficheURL()
    {
        echo "MON URL 3 = " . self::URL_WEBSITE . "<br/>";
    }
}

$w1 = new Website();
echo "Mon URL 1 = " . $w1::URL_WEBSITE . "<br/>";
echo "Mon URL 2 = " . Website::URL_WEBSITE . "<br/>";

$w1->afficheURL();



?>

</html>