<?php

include("connection.php");

try {
    $fetch_query = "SELECT * FROM `prodect`";
    $result = mysqli_query($db , $fetch_query);

    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($data);




} catch (\Throwable $th) {
    echo "", $th->getMessage(),"";
}

?>












<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
</html>
 <h1 class="text-center">ALL PRODUCTS</h1>
 <div class="container">
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">products name</th>
      <th scope="col">products price</th>
      <th scope="col">products descreption</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $value){ ?>
    <tr>
      <th scope="row"><?= $value["prod_id"] ?></th>
      <td><?= $value["prod_name"] ?></td>
      <td><?= $value["prod_price"] ?></td>
      <td><?= $value["prod_desc"] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</body>
</html>