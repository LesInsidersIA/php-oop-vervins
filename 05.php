<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
</head>

<body>
    <?php
    class Point
    {
        // Attributs de la class Point
        private $x;   // absisse
        private $y;   // ordonée

        function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }

        // Les setteurs
        function setX($x)
        {
            $this->x = $x;
        }

        function setY($y)
        {
            $this->y = $y;
        }

        // Les guetteurs
        function getX()
        {
            return $this->x;
        }

        function getY()
        {
            return $this->y;
        }

        function calculDistance(Point $b)
        {
            /*
            echo "abscisse de l'objet a : x1 = " . $this->getX() . "<br/>";
            echo "ordonée de l'objet a : y1 = " . $this->getY() . "<br/>";

            echo "abscisse de l'objet p : x2 = " . $b->getX() . "<br/>";
            echo "ordonnée de l'objet p : y2 = " . $b->getY() . "<br/>";
            */

            return sqrt((pow(($b->getX() - $this->getX()), 2)) + (pow(($b->getY() - $this->getY()), 2)));
        }

        function calculCoordsMilieu($b, $m)
        {
            // La formation m1 = (x1+x2)/2 et m2 = (y1+y2)/2
            $m->setX(($this->getX() + $b->getX()) / 2); // = 2.5
            $m->setY(($this->getY() + $b->getY()) / 2); // = 4
        }

        function translation($p)
        {
            $this->x = $this->x +  $p->getX();
            $this->y += $p->getY();
        }
    }

    // Instanciation (création de l'objet $a à partir de la classe Point)
    $a = new Point(1, 2);
    echo "La valeur de x pour l'objet a = " . $a->getX() . "<br/>";
    echo "La valeur de y pour l'objet a = " . $a->getY() . "<br/>";

    echo "<br/>";

    // Instanciation (création de l'objet $b à partir de la classe Point)
    $b = new Point(4, 6);
    echo "La valeur de x pour l'objet b = " . $b->getX() . "<br/>";
    echo "La valeur de y pour l'objet b = " . $b->getY() . "<br/>";

    echo "<br/>";

    // Test du setteurs
    /*
    $a->setX(6);
    $a->setY(10);
    echo "La valeur de x pour l'objet a = " . $a->getX() . "<br/>";
    echo "La valeur de y pour l'objet a = " . $a->getY() . "<br/>";
    */

    // Appel de la méthode calculDistance
    $distanceab = $a->calculDistance($b);
    echo "La distance entre a et b = " . $distanceab . "<br/>";

    //Appel de la méthode calculCoordsMilieu
    $m = new Point(0, 0);
    echo "La valeur de x pour l'objet m = " . $m->getX() . "<br/>";
    echo "La valeur de y pour l'objet m = " . $m->getY() . "<br/>";
    $a->calculCoordsMilieu($b, $m);
    echo "La valeur de x pour l'objet m = " . $m->getX() . "<br/>";
    echo "La valeur de y pour l'objet m = " . $m->getY() . "<br/>";

    // Appel de la fonction translation
    $a->translation($b);
    echo "La valeur de x pour l'objet a = " . $a->getX() . "<br/>";
    echo "La valeur de y pour l'objet a = " . $a->getY() . "<br/>";


    echo "<br/>";
    ?>

</body>

</html>