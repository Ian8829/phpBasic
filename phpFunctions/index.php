<?php

function getInfo($name, $title = Null) {
  if ($title) {
    echo "$name has arrived, they are with us as a $title";
  } else {
    echo "$name has arrived, welcome!!";
  }
}

//getInfo('Mike', 'frog');
getInfo('Mike');