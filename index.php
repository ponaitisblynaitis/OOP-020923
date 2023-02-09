<?php
require_once "Point.php";

$p = new Point(2,2);
$otherPoint = new Point(8, 11);


echo "<hr>";
echo $p->distanceFromOrigin();
echo "<hr>";

$p->push(4,3);
echo $p->getX();
echo $p->getY();

echo "<hr>";
echo $p;
echo "<hr>";
echo $p->distance($otherPoint);
echo "<hr>";
$p->setLocation(8, 11);
echo $p;
echo "<hr>";
