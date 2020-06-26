<?php
    use CircleK\Circle;
    use CylinderK\Cylinder;
    include_once('Circle.php');
    include_once('Cylinder.php');

    $circle1 = new Circle(10,'red');
    $circle1->setRadius(10);
    $circle1->setColor('red');
    echo $circle1->__toString();
    echo "<br/>";
    $cylinder1 = new Cylinder(10,'yellow', 3);
    echo $cylinder1->__toString();