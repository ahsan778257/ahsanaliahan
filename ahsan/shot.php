<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

    require ("connection.php");

    if (isset($_POST["submit"]) ){

    $cname = $_POST["Cname"];
    $cemail = $_POST["Cemail"];
    $cmessage = $_POST["Cmessage"];

    $sql = "INSERT INTO `customer_data`(`customer_name`, `customer_email`, `customer_message`)
    VALUES ('$cname','$cemail','$cmessage')";
    
    $result = mysqli_query($conn,$sql);
    

    if($result){
        echo "<h1>Your message is successfully sent</h1>";
    }else{
        echo "Something is wrong.Please Check your message and try again";
    };
    mysqli_close($conn);
      };
      
      ?>







</body>
</html>