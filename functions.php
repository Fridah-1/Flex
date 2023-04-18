<?php


//FUNCTIONS

//A function is a block of code that performs a specific task.

//Parameters - variable in a function created
//Arguments - values passed to a variable in a function 
//return value - values returned by a function called
//local variable - a variable accessed only inside a block of code(function or loop)
//global variable - a variable that is accessed globally(throughout your code or program)

//Functions are important 
//1. -> easy to manage  your code
//2. ->allow us to avoid repetition -D.R.Y (Don't Repeat Yourself)-is reusable
//3. ->organises code

//syntax
// function function_name(){
    //body of function
// }

function greet_user(){
    echo "Hello Fridah!😁";
}

//to call a funxtion simply type the name of the function followed by parentheses
greet_user();


//create a function that adds two numbers together
echo "<br>";
echo "<br>";
function sum(){
    $x=2;
    $y=5;
    $sum=$x + $y;
    

    echo "The sum of ". $x . " and " .$y. " is " .$sum . ".";
}

sum();

//using parameters
echo "<br>";
echo "<br>";

function divideTwoNumbers($num1,$num2)
{
    echo "The quotient of ".$num1 . " and ".$num2 . " is ".($num1/$num2);
}

//passing arguments
divideTwoNumbers(100,13);

//return a value using a function
echo "<br>";
echo "<br>";
function multiplyTwoNumbers($num1,$num2)
{
    $product = $num1 * $num2;
    return "The product of ".$num1. " and ".$num2. " is " .$product. ".";
}

$product=multiplyTwoNumbers(4,5);
echo $product;

//Function that displays elements of an array
echo "<br>";
echo "<br>";
function displayArrayElement(){
    $numbers=array(46, 3 , 9, 0, 3);
    foreach ($numbers as $number)
    {
        echo $number. "<br>";
    }
}

displayArrayElement()


?>