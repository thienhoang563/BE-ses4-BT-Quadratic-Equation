<?php
include "classQuadratic.php";
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $quadraticEquation = new QuadraticEquation($a,$b,$c);
    $root1 = 0;
    $root2 = 0;
    if ($a != 0) {
        if ($quadraticEquation->getDelta() > 0) {
            $root1 = $quadraticEquation->getRoot1();
            $root2 = $quadraticEquation->getRoot2();
            echo '<h1>root 1 = ' . $root1 . '<br></h1>';
            echo '<h1>root 2 = ' . $root2 . '</h1>';
        } else if ($quadraticEquation->getDelta() === 0) {
            $root1 = $quadraticEquation->getExperience();
            echo '<h1>root = ' . $root1 . '</h1>';
        } else
            echo '<h1>The equation has no root</h1>';
    } else
        echo "<h1>Is not Quadratic Equation</h1>";
}