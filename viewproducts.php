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


if(isset($_GET["delid"])) {

  $delid = $_GET["delid"];

  echo $_GET["delid"];
  $delquery = "DELETE FROM `prodect` WHERE `prodcect_id` = '$delid'";

  $delresult = mysqli_query($db , $delquery);

  if($delresult) {
    echo "item deleted successfully";

  }else{
    echo "<script>alert(`item deletion failed`)<scrpt/>";
  }
















    
  
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($data as $value){ ?>
    <tr>
      <th scope="row"><?= $value["prodcect_id"] ?></th>
      <td><?= $value["prodcet_name"] ?></td>
      <td><?= $value["prodcet_price"] ?></td>
      <td><?= $value["prodcet_quntity"] ?></td>
      <td><a href="viewproducts.php?delid=<?=$value["prodcect_id"] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/js/all.min.js" integrity="sha512-BivWm1+PupfLofQ5Ei/fNEC6Oq6IZiGO9WUm2ibWHZ33cj/qTX4zsBW/0SN9Myo4HEmINmr0wjuQE8eDL3rmng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
