<?php

//KCAU Grading System - (Mini App)
//Create a variable for Student name
$student_name ="Fridah Maina";

//Define variables to store the scores of the students
$math = 0;
$english = -1;
$kiswahili = 0;
$science = 56760;
$sst = 0;

//calculate the total score and swtore it 
$total_score = $math + $english + $kiswahili + $science + $sst;

//compute the average score and store it in a variable
$average_score = $total_score/5;
//echo "Your Average Score is: " .$average_score;

//Use decision statement to check the average score then Grade
echo "<br>";
if($average_score>=80 && $average_score<100)
{
     echo "Student Name:".$student_name ." scored grade A.";
}
else if($average_score>=70 && $average_score<80){
    echo "Student Name:".$student_name ." scored grade B.";
}

else if($average_score>=60 && $average_score<70){
    echo "Student Name:".$student_name ." scored grade C.";
    }
else if($average_score>=50 && $average_score<60){
    echo "Student Name:".$student_name ." scored grade D.";
}
else if($average_score>=40 && $average_score<50){
    echo "Student Name:".$student_name ." scored grade F.";
}

else if($average_score>=0 && $average_score<40){
    echo "Student Name:".$student_name ." scored grade F. You are expected to come with your Parent";
}
else{
    echo "Invalid!!!!. Please enter Valid Score.";
}

echo "<br>";
switch($average_score)
{
    case $average_score>=80 && $average_score<=100:
        echo "Student Name:".$student_name ." scored grade A.";
        break;

    case $average_score>=70 && $average_score<80:
        echo "Student Name:".$student_name ." scored grade b.";
        break;

    case $average_score>=60 && $average_score<70:
        echo "Student Name:".$student_name ." scored grade A.";
        break;

    case $average_score>=50 && $average_score<60:
        echo "Student Name:".$student_name ." scored grade A.";
        break;

    case $average_score>=40 && $average_score<50:
        echo "Student Name:".$student_name ." scored grade A.";
        break;

    case $average_score>=0 && $average_score<40:
        echo "Student Name:".$student_name ." scored grade A.";
        break;
        
    default:
    echo "Invalid!!!!. Please enter Valid Score.";
}
?>