<?php

$result = "";

if (isset($_GET["btn"])) {

    $productname  = isset($_GET["productname"]) ? htmlspecialchars($_GET["productname"]) : "";
    $description  = isset($_GET["description"]) ? htmlspecialchars($_GET["description"]) : "";
    $price        = isset($_GET["price"]) ? htmlspecialchars($_GET["price"]) : "";
    $brand        = isset($_GET["brand"]) ? htmlspecialchars($_GET["brand"]) : "";
    $category     = isset($_GET["category"]) ? htmlspecialchars($_GET["category"]) : "";

    $result = "
        <h2>Product Details</h2>
        <p><strong>Product Name:</strong> $productname</p>
        <p><strong>Description:</strong> $description</p>
        <p><strong>Price:</strong> $price</p>
        <p><strong>Brand:</strong> $brand</p>
        <p><strong>Category:</strong> $category</p>
    ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; }
        input[type="submit"] { width: auto; margin-top: 15px; padding: 10px 20px; cursor: pointer; }
        #result { margin-top: 30px; padding: 15px; border: 1px solid #ccc; background: #f9f9f9; }
    </style>
</head>
<body>

    <h2>Add Product</h2>
    <form action="" method="GET">

        <label for="productname">PRODUCT NAME</label>
        <input type="text" name="productname" id="productname">

        <label for="description">DESCRIPTION</label>
        <textarea name="description" id="description" rows="4"></textarea>

        <label for="price">PRICE</label>
        <input type="number" name="price" id="price" step="0.01">

        <label for="brand">BRAND</label>
        <input type="text" name="brand" id="brand">

        <label for="category">CATEGORY</label>
        <input type="text" name="category" id="category">

        <input type="submit" value="Submit" name="btn">
    </form>

    <div id="result">
        <?php echo $result; ?>
    </div>

</body>
</html>
