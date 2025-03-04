<?php

function calculateCircleArea(float $radius): void
{
    $area = pi() * $radius * $radius;
    echo "Area of circle is: " . $area . "<br>";
}

function calculateRectangleArea(float $length, float $width): void
{
    $area = $length * $width;
    echo "Area of rectangle is: " . $area . "<br>";
}

function bishal()
{
    
}

calculateCircleArea(5);
calculateRectangleArea(5, 5);