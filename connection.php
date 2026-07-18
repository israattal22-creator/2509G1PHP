<?php


try{

 $db = mysqli_connect("localhost" ,"root" ,"" ,"dbdata");
    echo "database connected succesfully";
} catch(\Throwable $xy) {

echo  $xy->getMessage();


}




?>