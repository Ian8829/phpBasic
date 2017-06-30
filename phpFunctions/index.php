<?php

$names = [
  'Mike' => 'Frog',
  'Chris' => 'Teacher',
  'Hampton' => 'Teacher'
];

//foreach (array_keys($names) as $name) {
//  echo "Hello, $name</br>";
//}


function printInfo($value, $key) {
  echo "$key is a $value.</br>";
}

array_walk($names, 'printInfo');