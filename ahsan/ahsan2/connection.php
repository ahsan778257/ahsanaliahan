<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>connection </title>
</head>
<body>
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "learn-php";


   $connection = new mysqli($servername, $username, $password, $dbname);

   if($connection->connect_error){
       die("connection failed" . $connection->connect_error);
   }


   

        ?>


</body>
</html>