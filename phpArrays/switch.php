<?php
$today = date('l');
$today = 'Sunday';

switch ($today) {
    case 'Monday':
        echo 'Wash on Monday';
        break;
    case 'Tuesday':
        echo 'Iron on Tuesday';
        break;
    case 'Wednesday':
        echo 'Mend on Wednesday';
        break;
    case 'Thursday':
        echo 'Churn on Thursday';
        break;
    case 'Friday':
        echo 'Clean on Friday';
        break;
    case 'Saturday':
        echo 'Bake on Saturday';
        break;
    case 'Sunday':
        echo 'Rest on Sunday';
        break;
    default:
        echo "I don't know what day it is...";
        break;
}

// if you don't put break code bottom line of your case,
// it'll be executed below all line..
