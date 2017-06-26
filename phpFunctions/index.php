<?php

$name = 'Allison';

$greet = function() use($name){
  // use($name) means that closure definition
  echo "Hello $name!";
};

$greet();