<?php
function test($number1, $number2){
    if ($number1>$number2){
    return "first number is bigger";
        }else if ($number1<$number2){
        return "first number is smaller";
        }else{
    return "the 2 numbers are equal";
        }
    }
echo test(2, 22);
?>