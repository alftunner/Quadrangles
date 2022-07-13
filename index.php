<?php

use test\Point;
use test\Quadrangle;
use test\Rectangle;

include 'autoload.php';

$rectangle = new Rectangle(2, 4, 2, 4, 90);
$rectangle->calcArea();
echo $rectangle->area;

