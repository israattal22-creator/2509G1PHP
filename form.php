<?php

// if(isset($_GET["prodBtn"]))
// {

// echo  $_GET["prodName"];
// echo  $_GET["prodPrice"];
// echo  $_GET["prodDesc"];
// echo  $_GET["cateogry"];
// }


// if(isset($_GET["prodBtn"]))
// {

// echo  $_GET["prodName"];
// echo  $_GET["prodPrice"];
// echo  $_GET["prodDesc"];
// echo  $_GET["cateogry"];
// }




if(isset($_POST["prodBtn"])){


// $prodName =$_POST["prodName"];
// $prodPrice =$_POST["prodPrice"];
// $prodDesc =$_POST["prodDesc"];
// $catigaroy =$_POST["catigaroy"];



$prodName = filter_input(INPUT_POST,"prodName", FILTER_SANITIZE_SPECIAL_CHARS);

$prodPrice = filter_input(INPUT_POST, "prodPrice", FILTER_VALIDATE_INT);

$prodDesc = filter_input(INPUT_POST,"prodDesc", FILTER_SANITIZE_SPECIAL_CHARS);

$cateogry = filter_input(INPUT_POST,"cateogry", FILTER_SANITIZE_SPECIAL_CHARS);

echo "".$prodName."-------".$prodPrice."---------".$prodDesc."--------".$cateogry;









}












?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
 
</style>
  <body>
    <h1 class="text-center">FORM</h1>
   
<div class="container">
<form class="row" method="POST" action="">

<div class="col-12">
    <label for="prodName" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="prodName" name="prodName" >
</div>

<div class="col-12">
    <label for="prodPrice" class="form-label">Product Price</label>
    <input type="text" class="form-control" id="prodPrice" name="prodPrice" >
</div>

<div class="col-12">
    <label for="prodDesc" class="form-label">Product Description</label>
    <input type="text" class="form-control" id="prodDesc" name="prodDesc">
</div>
<div class="col-12">
    <label for="prodDesc" class="form-label">cateogry</label>
    <input type="text" class="form-control" id="cateogry" name="catigaroy">
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="prodBtn">Add Product</button>
</div>

</form>
</div>
</div>
</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>