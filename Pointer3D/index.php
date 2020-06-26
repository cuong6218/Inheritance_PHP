<?php
    include('Pointer2D.php');
    include('Pointer3D.php');

    $pointer1 = new Pointer2D(10,5);
    $pointer2 = new Pointer3D(1,2,3);
    print_r($pointer1->getXY());
    echo '<br/>';
    $pointer1->setXY(5,3);
    echo $pointer1->__toString();
    echo '<br/>';
    print_r($pointer2->getXYZ());
    echo '<br/>';
    $pointer2->setXY(5,7);
    echo '<br/>';
    echo $pointer2->__toString();

