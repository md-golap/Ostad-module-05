<?php
    $numbers = 23;

    $Reminder = $numbers % 2 ;

    if($numbers == 0 ){
        echo "The number is zero";
    }else if($Reminder == 0){
        echo "The number is even";
    }else if($Reminder == 1){
        echo "The number is odd";
    }




?>