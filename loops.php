<?php

for($i = 0;  $i <= 10; $i++)
{
    echo "$i <br>";
}



echo"===========ARRAY==============";


$numbers = [2,3,6,5,4,8];


$person = [
    "usernmae" => "shabbir ghulam",
    "age" => "24",
    "cnic" => 1306014587544,
    "designation" => "software engineer",
];


foreach($numbers as $val){
    echo "$val <br>";
}

foreach($person as $key => $val ){
    echo " $key============$val <br>";
}


?>