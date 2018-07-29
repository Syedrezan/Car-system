<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
	<?php include('menu.php'); ?>
	<div id="main">
		<h1>Add Car Parts</h1>
		<form action="savepart.php" method="POST">
			<p>Name</p>
			<input type="text" name="name">
			<p>Price</p>
			<input type="number" name="price">
			<?php 
				include('../config.php'); 
				$sql = "SELECT * FROM cars";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo '<p>Select Car</p>';
				    echo '<select name="car">' ;
				    while($row = $result->fetch_assoc()) {
				        //echo '<option " . $row["id"]; 
		        		echo '<option value="'.$row["id"].'">'.$row["make"].' '.$row["model"].' '.$row["year"].'</option>';
				    }
				echo '</select>';
				} else {
				    echo "0 results";
				}
				
				$sql = "SELECT * FROM categories";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo '<p>Select Category</p>';
				    echo '<select name="category">' ;
				    while($row = $result->fetch_assoc()) {
				        //echo '<option " . $row["id"]; 
		        		echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
				    }
				echo '</select>';
				} else {
				    echo "0 results";
				}
				$conn->close();
			?>
			<br><br>
			<input type="submit" name="" value="Add">
		</form>
	</div>

</body>
</html>

