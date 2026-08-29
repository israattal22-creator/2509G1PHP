<?php

$numbers = [32,43,78,44,26,85,23,76,87];

$i = 0;

while($i < count($numbers)) {
    echo "$numbers[$i]<br>";

    $i++;
}

if(isset($_POST["btn"])) {
    $guessnumbers = $_POST["guessnumbers"];

    $i = 0;
    
    do {
        if ($guessnumbers == $numbers[$i]) {
            echo "you guess the right number!";
            return;
        } else {
            echo "you guess the wrong number!";
            return;
        }
        
        $i++;
    } while ($i < count($numbers));
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="guessnumbers">
        <button type="submit" name="btn">guess</button>
    </form>
</body>
</html>
