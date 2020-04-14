<?php
use interface_comparator\Circle;
use interface_comparator\CircleComparator;
include "CircleComparator.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 6);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));