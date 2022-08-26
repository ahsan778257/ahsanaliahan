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
    ?>








<form action="wellcome.php" method="POST">
Contact Information: <br>
Your Name:
     <input type="text" name="cname" placeholder=" Entry Your Name"><br><br>
     Your Email:
     <input type="text" name="email" placeholder="Entry Your email address "><br><br>
     <input type="submit" value="submit" name="submit">
     </form>

<?php
  

 if(isset($_POST["submit"])){
    $cname = $_POST["cname"];
    $email = $_POST["email"];


    $sql = "INSERT INTO `contact_name`(`names`, `email`) VALUES ('$cname','$email')";

        $result = mysqli_query($conn,$sql);
    if ($result){
        echo "insert ";
    }else{
        echo "no";
    };
    mysqli_close($conn);
 }


?>








</body>
</html>