<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cardatabase";

$quantity=$_POST['quantity'];
$users=$_POST['users'];
$parts=$_POST['parts'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO orders(quantity,userid,parts_id)
VALUES ('$quantity', '$users','$parts')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>