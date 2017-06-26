<?php
$iceCream = array(
    'Alena' => 'Black Cherry',
    'Treasure' => 'Chocolate',
    'Dave MacFarland' => 'Cookies and Cream',
    'Rialla' => 'Strawberry'
);

$iceCream['alena'] = 'Pistachio';
$iceCream['Dave Thomas'] = 'Cookie Dough';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;
var_dump($iceCream);

$keys = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
];

var_dump($keys);