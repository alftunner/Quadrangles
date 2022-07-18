<?php

include "autoload.php";

use test\Rectangle;
use test\Circle;

$figure1 = Rectangle::createInstanceSecond(2,2,3,3,90);
$figure2 = Rectangle::createInstanceFirst(2,2);
var_dump($figure2);

