<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>

<body>
    <h1>LEs interfaces en PHP POO</h1>
    <p>Les interfaces sont similaires aux classes abstraites avec quelques différences :</p>
    <ul>
        <li>Les interfaces ne peuvent pas avoir des propriétés.</li>
        <li>Tous les méthodes d'une interface doivent être publiques.</li>
        <li>Une classe enfant qui va hérité d'une interface n'utilise pas le mot clé <code>extends</code> mais
            plutôt <code>implements</code>
        </li>
        <li>Le mot clé <code>class</code> dans la classe parent est remplacé par le mot clé <code>interface</code></li>
    </ul>

    <?php
    // Class parent
    interface Personne
    {
        public function afficherInfos();
    }

    // Class enfant
    class Informaticien implements Personne
    {
        public function afficherInfos()
        {
            echo "Bonjour, tu es informaticien <br/>";
        }
    }

    // Class enfant
    class Developpeur implements Personne
    {
        public function afficherInfos()
        {
            echo "Bonjour, tu es développeur <br/>";
        }
    }

    $informaticien = new Informaticien();
    $informaticien->afficherInfos();

    $developpeur = new Developpeur();
    $developpeur->afficherInfos();

    ?>

</body>

</html>