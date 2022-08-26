<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration php form confirm</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbreg = "registrattion";


$conn = mysqli_connect($servername, $username, $password, $dbreg);

if($conn->connect_error){
    die("connection faield") .$conn->connect_error;
}



//registration 
if(!isset($_POST["username"], $_POST["password"],$_POST["email"])){
    exit ("Empty field(s)");
}

if(empty($_POST["username"]) ।। empty($_POST["username"])।। empty($_POST["username"])){
    exit("values Empty");

}



















?>






</body>
</html>