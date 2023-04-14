<?php

//loop->repeat 
//iterate-repeat

//types of loops
//-bounded (fixed loops) - we know prior how many times the loop will repeat
//-unbounded -> we do not know prior how many times the loop will repeat e.g WHILE and DO WHILE

//FOR LOOP

//syntax

/*for($counterVariable;$test_expression; $update_variable){
//do sth
}*/

//counterVariable -> initialize the counter variable
//test_expression: if TRUE-> loop executes
//                 if FALSE -> loop ends

//incrementing/decrementing the counter variable
echo "<hr>";
//write a program to print even integers starting from 0 up to 20 e.g  0 2 4 6 8 ....
for($x=0; $x<=20; $x+=2)
{
    echo $x .", ";

}

//write a program to print integers with a step of 5 starting from 50 to 0 e.g 50 45 40 ....
echo "<hr>";

for($x=50; $x>=0; $x-=5)
{
    echo $x .", ";
}
echo "<hr>";

?>