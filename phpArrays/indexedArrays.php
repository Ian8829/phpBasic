<?php
$learn = array('Conditionals', 'Arrays', 'Loops');

$learn[] = 'Build something awesome!';
//$learn = 'Build something awesome!';

array_push($learn, 'Functions', 'Forms', 'Objects');
// from end of the array

array_unshift($learn, 'HTML', 'CSS');
// from first of the array

var_dump($learn);
//echo $learn[0];
//echo $learn;
//echo implode("\n", $learn);