<?php 
include('config.php');
$quantity=$_POST['quantity'];
$users=$_POST['users'];
$parts=$_POST['parts'];

$sql = "INSERT INTO orders(quantity,userid,parts_id)
VALUES ('$quantity', '$users','$parts')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>