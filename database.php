<?php



//create the database parameters

$userName = "root";
$hostName = "localhost";
$password = "";
$dbName = "School_db";

//connect to my SQL Server

$conn = mysqli_connect($hostName, $userName, $password, $dbName);

//Check if connection was successful
if ($conn){
    echo "Connection Successful";
}
else
{
    echo "Connection Failed";
}

// C - create
// R - Read/ Retrieve
// U - Update
// D - Delete

// 1. Create the database 
// 2. Create a table in the database