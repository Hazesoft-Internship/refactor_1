<?php
include_once "Shape.php";
include_once "AreaCircle.php";
include_once "AreaRectangle.php";

$num = 25;
$areaC = new AreaCircle($num);
echo $areaC->area();

$num2 = 30;
$areaR = new AreaRectangle($num, $num2);
echo $areaR->area();
?>