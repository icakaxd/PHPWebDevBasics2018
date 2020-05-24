<?php

function larger_number($one, $two, $three){
    if ($one > $two) $largest = $one; else $largest = $two;
    if ($largest > $three) return $largest; else return $three;
}

$n1 = (int)readline();
$n2 = (int)readline();
$n3 = (int)readline();

echo larger_number($n1, $n2, $n3);