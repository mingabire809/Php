<?php
//simple array

$numbers = [1,2,4,67,76];
$fruits = array('apple', 'mango');

//print_r($numbers)

//echo $fruits[0];

$colors = [
    1 => 'red',
    4=>'blue',
];

//echo $colors[4]

$person = [
    'firstName' => 'Brad',
    'lastName' => 'Traversy',
    'email' => '@gmail.com'
];

$people = [
    [
        'firstName' => 'Brad',
        'lastName' => 'Traversy',
        'email' => '@gmail.com'
    ],
    [
        'firstName' => 'Tom',
        'lastName' => 'Heu',
        'email' => '@gmail2.com'
    ]
    ];

    echo $people[1]['email'];

    var_dump(json_encode($people))



?>