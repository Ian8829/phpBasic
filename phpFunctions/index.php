<?php

function addUp($a, $b) {
  $arr = [
    $a,
    $b,
    $a + $b
  ];
  return $arr;
}

$value = addUp(2, 4);

//print_r($value);
echo $value[2];