<?php

function answer() {
  return 42;
}

function addUp($a, $b) {
  return $a + $b;
}

//$func = 'answer';
$func = 'addUp';

$num = $func(5, 7);

echo $num;