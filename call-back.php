<?php
    function add($x1,$x2){
        echo "Adding $x1 and $x2";
    }

    function divide($x1,$x2){
        echo "Divide $x1 and $x2";
    }


    function process($d1,$d2, $cb){
        if(is_callable($cb)){
            $cb($d1,$d2);
        }else{
            echo "$cb is not callable";
        }
    }


    process(12,34,"add")

?>