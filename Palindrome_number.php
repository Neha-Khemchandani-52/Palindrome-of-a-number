<?php
/***
 **Description : Palindrome of a number(reverse of given number equals to the given number itself)
 **Added By : Neha
 **Date : 3rd November,2019
 ***/

## Note : This program will also be used as Reverse of Number program (exclude if condition in this program)

$number = 151;
$reversed_number = 0;
$remainder =0;
$original_number = $number;
while(floor($number))
{
    $remainder = $number % 10;
    $reversed_number = $reversed_number * 10 + $remainder;
    $number = $number/10;
}

if($original_number == $reversed_number)
{
    echo "Given Number is Palindrome! ";
}
else
{
    echo "Given Number is not palindrome!";
}




?>
