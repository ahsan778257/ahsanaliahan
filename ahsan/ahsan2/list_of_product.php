<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Product </title>
    <style>
            #ahsan{
                background-color:orange;
                
            }


    </style>
</head>
<body>
<div id="ahsan">
<?php
require ("connection.php");

            $slt = "SELECT * FROM customer";
            $query = $connection->query($slt);

            echo "<table border=1px> <th>Id</th><th>Name</th><th>Date</th><th>Action</th>";

            while($data = mysqli_fetch_assoc($query)){
                
                $id = $data["customer_id"];
                $name = $data["product_name"];
                $date = $data["product_date"];
                 
                echo "<tr><td>$id</td><td>$name</td><td>$date</td><td><a href='edit_product.php?id=$id'>Edit</a></td></tr>";
            };
        echo "</table>";








?>









</div>

    
</body>
</html>