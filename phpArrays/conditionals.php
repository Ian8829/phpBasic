<?php
$a = 0;
$b = 8;


if ($a == $b) {
    echo 'values are equal ';
} else {
    echo 'values are NOT equal ';
}

if (($a == $b) == false) {
    echo 'values are NOT equal ';
}

if ($a <> $b) {
    echo 'values are NOT equal ';
}
// not equal

if ($a != $b) {
    echo 'values are NOT equal ';
}

if ($a !== $b) {
    echo 'values are NOT identical ';
}
// not identical

if ($a) {
    echo ' true';
}

if (!$a) {
    echo ' false';
}

if ($a == false) {
    echo ' false';
}

if ($a != true) {
    echo ' false';
}

?>


