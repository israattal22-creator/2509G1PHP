<?php

if(isset($_GET["btn"]))
{

echo  $_GET["username"];
echo  $_GET["email"];
echo  $_GET["password"];
echo  $_GET["city"];
}


// if(isset($_post["btn"]))
// {

// echo  $_post["username"];
// echo  $_post["email"];
// echo  $_post["password"];
// echo  $_post["city"];
// }







?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">USERNAME</label>
        <input type="text" name="usernmae"> <br>
        <label for="">EMAIL</label>
        <input type="text" name="EMAIL"> <br>
          <label for="">password</label>
        <input type="text" name="password"> <br>
  <label for="">city</label>
        <input type="text" name="city"> <br>
        <input type="submit" value="submit" name="btn">
    </form>
</body>
</html>