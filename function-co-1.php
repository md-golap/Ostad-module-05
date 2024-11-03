<?php

$hello = "I";

function grate(){

    global $hello;
    $message = $hello ." love you";
    echo $message;
}





grate();




function incriment(){

    static $counter = 0;
    echo $counter;
    $counter ++;
}

incriment();
incriment();

?>