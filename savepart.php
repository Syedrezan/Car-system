<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardatabase";

$name=$_POST['name'];
$price=$_POST['price'];
$car=$_POST['car'];
$cat=$_POST['category'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO parts(name,price,cars_id,categories_id)
VALUES ('$name', '$price','$car','$cat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>