<?php
$fruits = ['orange', 'mangoes', 'chocolate'];

print_r($fruits) . '<br>';

$fruits[] = 'apple';

array_push($fruits, 'passion');
array_unshift($fruits, 'cucumber');
array_pop($fruits, 'orange');


print_r($fruits) . '<br>';

?>