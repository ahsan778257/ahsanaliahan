<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>index item</title>
</head>
<body>
    <?php
    require ("connection.php");

        if (isset($_POST["product_name"])){

            $product_name = $_POST["product_name"];
            $product_date = $_POST["product_date"];

           $sql ="INSERT INTO `customer`(`product_name`, `product_date`) VALUES ('$product_name','$product_date')";
           $query = mysqli_query($connection,$sql);

           if ($query){
               echo "Data inserted successfully ";

           }else{
               echo "no data inserted";
           };
        }; 
    
    ?>



        <form action="index.php" method="POST">
            <h2>Product information collection form</h2>
            Product Name : <input type="text" name="product_name"> <br>
            product-date : <input type="date" name="product_date"><br>
            <input type="submit" name="submit" value="submit">

        </form>
</body>
</html>