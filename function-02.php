<?php




$x = 12;
$y = 15;


function addTwo (){
    global $x, $y;
     echo $x+$y;
}




function addThree(){
     global $x,$y;

    echo $x+$y+10;
}


addThree();

$name = "jon doe";

 function grate(){
    global $name;

    echo "hello" .$name;
 }


 grate()
 
?>