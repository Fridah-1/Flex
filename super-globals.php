<?php




//SUPER GLOBAL VARIABLES


//$_GET
//$_POST
//$_SERVER

//Working With HTML Forms
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dashboard.php" method="GET">
        <label for="">UserName</label>
        <input type="text" name="username" >
        <label for="">E-Mail</label>
        <input type="text" name="email" >
        <button type="submit">Submit</button>
    </form>
</body>
</html>
