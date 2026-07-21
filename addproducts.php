<?php


include("connection.php");

try{


   if(isset($_POST["prodBtn"])) {
    $prodname = $_POST["prodName"];
    $prodprice = $_POST["prodPrice"];
    $proddesc = $_POST["prodDesc"];

      $insertquery = "INSERT INTO `prodect`(`prodcet_price`, `prodcet_name`, `prodcet_quntity`) VALUES  ('$prodprice', '$prodname', '$proddesc')";



    $result = mysqli_query($db, $insertquery);

    if($result){
        echo "prodcut inserted successfully!";
    }
    else{
        echo "prodcut is not inserted";
    }
}



    } catch(\Throwable $xy) {

    echo  $xy->getMessage();


    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>products form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <form class="row g-3" method="POST">

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">
                Product Name
            </label>
            <input type="text"
                   class="form-control"
                   id="inputEmail4"
                   name="prodName">
        </div>

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">
                Product Price
            </label>
            <input type="text"
                   class="form-control"
                   id="inputEmail4"
                   name="prodPrice">
        </div>

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">
                Product Description
            </label>
            <input type="text"
                   class="form-control"
                   id="inputEmail4"
                   name="prodDesc">
        </div>

        <div class="col-12">
            <button type="submit"
                    class="btn btn-primary"
                    name="prodBtn">
                Add Product
            </button>
        </div>

    </form>
</div>




  </body>
</html>





