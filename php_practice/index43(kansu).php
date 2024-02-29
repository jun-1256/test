<?php

function totalPrice($fruitprice,$tax=1.08,$haiso=350){
    return($fruitprice*$tax)+$haiso;
}

$mikan = totalPrice(300);
echo $mikan."<br>";

$ringo = totalPrice(450);
echo $ringo."<br>";

$ichigo = totalPrice(550);
echo $ichigo."<br>";

$nashi = totalPrice(350);
echo $nashi;
    
?>