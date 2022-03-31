<?php 

GLOBAL $numOne;
GLOBAL $numTwo;

if(isset($_GET['submit'])){
    $numOne   = $_GET ['num1'];
    $numTwo   = $_GET ['num2'];
}


function sumon($numOne, $numTwo){
    return $numOne+$numTwo;
}

$result = sumon($numOne, $numTwo);



?>