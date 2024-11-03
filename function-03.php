<?php



function increment(){
    static $counter = 0;
    $counter++;
    echo $counter ."\n";
}




increment();
increment();





?>