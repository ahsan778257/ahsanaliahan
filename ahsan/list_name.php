<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of Table name</title>
</head>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact_information';
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die ("connection failed" . $conn->connect_error);
}
?>


<?php

$sql = "SELECT * FROM contact_name";


$query = $conn->query($sql);


echo "<table border= 1px ><th>Names</th><th>Email</th><th>Edit</th>"; 


while($data = mysqli_fetch_assoc($query)){
    $name = $data["names"];
    $email = $data["email"]; 


    echo   "<tr><td>$name</td><<td>$email</td><td><a href ='edit_contact.php?id=$name'>Edit</a></td></tr>";

}
 echo "</table>";
    
      
?>

    
</body>
</html>

