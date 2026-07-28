<?php

include("connection.php");


$upId = $_GET["upId"];



try {
    $fetch_query = "SELECT * FROM `prodect` WHERE `prodcect_id` = '$upId'";
    $result = mysqli_query($db, $fetch_query);

    $data = mysqli_fetch_assoc($result);

    print_r($data);


} catch (\Throwable $th) {
    echo "", $th->getMessage(), "";
}


try {

    if (isset($_POST["prodBtn"])) {

        
        $prodcet_name = $_POST["prodcet_name"];
        $prodcet_price = $_POST["prodcet_price"];
        $prodcet_quntity = $_POST["prodcet_quntity"];
        
        $updateQuery = "UPDATE `prodcet` SET `prodcet_name`= $prodcet_name',$prodcet_price`prodcet_price`='',`prodcet_quntity`=' $prodcet_quntity' WHERE `prodcect_id` = '$upId'";
        $result = mysqli_query($db,$updateQuery);

        if($result){
            echo "Product updated Successfully!";
            echo "<script>location.href='viewProducts.php'</script>";
        }
        else{
            echo "Product is not updated";
        }


    }


} catch (\Throwable $th) {

    echo $th->getMessage();

}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Update Products</h1>


    <div class="container">
        <form class="row g-3" method="post">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Product Name</label>
                <input type="text" value="<?= $data['prodcet_name'] ?>" class="form-control" id="inputEmail4" name="prodcet_name">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Product Price</label>
                <input type="text" value="<?= $data['prodcet_price'] ?>" class="form-control" id="inputEmail4" name="prodcet_price">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Product prodcet_quntity</label>
                <input type="text" value="<?= $data['prodcet_quntity'] ?>" class="form-control" id="inputEmail4" name="prodcet_quntity">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="prodBtn">Update Product</button>
            </div>
        </form>
        <a href="viewProducts.php">Go to Products Page</a>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>