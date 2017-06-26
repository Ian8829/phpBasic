<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

$learn[] = 'Build something awesome!';
//$learn = 'Build something awesome!';

array_push($learn, 'Functions', 'Forms', 'Objects');
// from end of the array

array_unshift($learn, 'HTML', 'CSS');
// from beginning of the array

ksort($learn);
sort($learn);
rsort($learn);
var_dump($learn);

shuffle($learn);
echo $learn[0];

//echo 'you removed ' . array_pop($learn);
//// remove from end of the array
//
//echo 'you removed ' . array_shift($learn);
//// remove from beginning of the array

unset($learn[1], $learn[2]);
// unset a given var

$learn = array_values($learn);
// refresh array key(from unset destroying array key)

//$learn = 'my learning list';
$learn[0] = 'Email';

var_dump($learn);
//echo $learn[0];
//echo $learn;
//echo implode("\n", $learn);