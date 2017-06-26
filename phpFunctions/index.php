<?php

function hello($arr) {
  if (is_array($arr)) {
    foreach($arr as $name)
    echo "Bonsoir..?? $name" . "<br/>\n";
  } else {
    echo "Hello, friends!";
  }
}

$name = [
  'Hampton',
  'Mike',
  'Allison'
];
hello($name);