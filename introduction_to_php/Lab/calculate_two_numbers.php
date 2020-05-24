<?php

$number1 = (int)readline();
$number2 = (int)readline();
$command = readline();

switch ($command){
    case 'sum':
        $result = $number1 + $number2;
        break;

    case 'subtract':
        $result = $number1 - $number2;
        break;

    case 'divide':
        if($number2 == 0)
            $result = "Cannot divide by zero";
        else
            $result = $number1 / $number2;
        break;

    case 'multiply':
        $result = $number1 * $number2;
        break;

    default:
        $result = "Wrong operation supplied";
        break;
}

echo $result;

/* sum, subtract, divide and multiply. */