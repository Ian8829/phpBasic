<?php

function hello() {
  echo 'Bonjour!';
}

$currentUser = 'Mike';
function isMike() {
  global $currentUser;

  if ($currentUser == 'Mike') {
    echo 'It is Mike!';
  } else {
    echo 'It is not Mike....';
  }
}

isMike();