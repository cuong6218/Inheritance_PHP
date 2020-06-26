<?php
    include_once('Point.php');
    include_once('MovePoint.php');
    $point1 = new Point(10,20);
    $movepoint1 = new MovePoint(11,12,1,2);
    echo $point1->__toString();
    echo '<br/>';
    echo $movepoint1->__toString();
    echo '<br/>';
    echo $movepoint1->move();