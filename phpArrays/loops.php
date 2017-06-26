<?php
$currentYear = date('Y');
$year = $currentYear - 20;

while (++$year <= $currentYear) {
  echo $year . "<br/>\n";
}

//do {
//  echo $year . "<br/>\n";
//} while (++$year <= $currentYear);