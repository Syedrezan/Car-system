<?php
include('../config.php');

$sql = "SELECT id, name,price,time FROM parts ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Price: " . $row["price"]. " Time: " . $row["time"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>