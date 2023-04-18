<?php


//Array - used to store  multiple values of a common data 
//TYPPES OF ARRAYS
//1. Indexed(Normal array) - each element is in a specific position called index
echo "<strong>1. Indexed(Normal array)</strong>";
echo "Each element is in a specific position called index.";
$numbers=array(46, "3" , 9.0, 0, 3);

//print an array (cannot echo array) use 
//1. print_r ($variable)

//print_r($numbers);

//2. var_dump($variable);

//var_dump($numbers);

$names =["Alex", "Claire", "Vivian","Warren", "Dennis", "Lewis", "Fridah", "Sam"];

//access elements in an array
//lets access the frist element

echo $names[5]. "<br>";

//add new element to our names array
$names[]="Micah";
var_dump($names);
//2. Multidimensional - array of arrays]
echo"<hr>";
echo "<strong>2. Multidimensional Arrays</strong>";
echo"It is an array of arrays.";
$students=array(
    array('PT','Dennis Muthui','Web Dev'),
    array('FT','Warren','System Admin'),
    array('DL','Jibril','Front-End Dev')
);

// double indexing
echo $students[1][1]. " is a ". $students[1][2] .".";
echo"<hr>";

//3. Associative - arrays that have a key and value pairs as its element
echo "<strong>3. Associative</strong>";
echo "It is a key associated to its values.";

$student =array(
    "FirstName"=> "Dennis",
    "LastName" => "Muthui",
    "Course" => "Web Development",
    "Semester" => "Trim 1 2023"
);

//Accessing elements of an associative arrays -> using the keys
echo "<br>";
echo $student["Course"];
echo "<br>";
echo "<br>";
echo $student["FirstName"]. " ". $student["LastName"].  " is in " . $student["Semester"] . " doing " . $student["Course"]. ".";
