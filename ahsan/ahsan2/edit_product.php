<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_product</title>
</head>
<body>
    <?php
require ("connection.php");


if (isset($_GET["id"])){
    $get_id = ($_GET["id"]);


   $sql = "SELECT * FROM `customer` WHERE customer_id=$get_id";
    $query = $connection->query($sql);

    
     $data = mysqli_fetch_assoc($query);
     $customer_id = $data["customer_id"];
     $product_name = $data["product_name"];
     $product_date = $data["product_date"];
}
  
        if (isset($_GET["product_name"])){
    
            $new_product = $_GET["product_name"];
            $new_date    = $_GET["product_date"];
            $new_id = $_GET["customer_id"];

           $sql1 ="UPDATE `customer` SET `customer_id`='$new_id',`product_name`='$new_product',`product_date`='$new_date' 
            WHERE customer_id = $new_id";

                if ($connection->query($sql1) === TRUE){

                    echo "<h3>Data Update</h3>";

                }else{
                    echo "Data not update";
                };

        };




?>
<form action="edit_product.php" method="GET">
            <h2>Product information Edit form</h2>
            <input type="text" name="customer_id" value="<?php echo $customer_id ?>"> <br>
            Product Name : <input type="text" name="product_name" value="<?php echo $product_name ?>"> <br>
            product-date : <input type="date" name="product_date" value="<?php echo $product_date  ?>"><br>
            <input type="submit" name="Update" value="Update">

        </form>



</body>
</html>