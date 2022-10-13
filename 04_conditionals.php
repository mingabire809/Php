<?php

$age = 20;

if($age >= 20){
    echo 'You are old';
}else{
    echo 'Not yet';
}
$t = date("H");
//echo $t;
if($t < 12){
    echo 'Good morning';
} elseif($t<17){
    echo 'Good afternoons';
}else {
    echo 'Good evening';
}

$color = 'red';

switch($color){
    case 'red':
        echo 'Favorite color is red';
        break;
    case 'blue':
        echo 'Favorite color is  blue' ;
        break;
    default:
    echo 'Not matching';
    }
?>