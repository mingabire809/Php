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
    echo 'Good afternoon';
}else {
    echo 'Good evening';
}
?>