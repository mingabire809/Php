<?php

for($x = 0; $x <=20; $x++){
    for($y = 20; $y >=1;$y--){
        echo $x . '<br>';
        echo $y;
    }
}

$posts = ['first', 'second', 'third'];

foreach($posts as $post){
    echo $post . '<br>';
}

?>