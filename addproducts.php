<?php
include("connection.php");

$prodname = '';
$prodprice = '';
$proddesc = '';
$message = '';

try {
    if (isset($_POST["prodBtn"])) {
        $prodname  = $_POST["prodName"];
        $prodprice = $_POST["prodPrice"];
        $proddesc  = $_POST["prodDesc"];

        $insertquery = "INSERT INTO `prodect`(`prodcet_price`, `prodcet_name`, `prodcet_quntity`) 
                         VALUES ('$prodprice', '$prodname', '$proddesc')";

        $result = mysqli_query($db, $insertquery);

        if ($result) {
            $message = "Product inserted successfully!";
        } else {
            $message = "Product is not inserted: " . mysqli_error($db);
        }
    }
} catch (\Throwable $xy) {
    $message = $xy->getMessage();
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

    <?php if ($message): ?>
        <div class="alert alert-info mt-3"><?php echo $message; ?></div>
    <?php endif; ?>

    <form class="row g-3" method="POST">

        <div class="col-md-12">
            <label for="prodName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="prodName" name="prodName" value="<?php echo htmlspecialchars($prodname); ?>">
        </div>

        <div class="col-md-12">
            <label for="prodPrice" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="prodPrice" name="prodPrice" value="<?php echo htmlspecialchars($prodprice); ?>">
        </div>

        <div class="col-md-12">
            <label for="prodDesc" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="prodDesc" name="prodDesc" value="<?php echo htmlspecialchars($proddesc); ?>">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" name="prodBtn">Add Product</button>
        </div>

    </form>
</div>
</body>
</html>
