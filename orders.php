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
		<form action="order.php" method="POST">
			<p>quantity</p>
			<input type="number" name="quantity">
			<?php 
				include('config.php'); 
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo '<p>Select users</p>';
				    echo '<select name="users">' ;
				    while($row = $result->fetch_assoc()) {
				        //echo '<option " . $row["id"]; 
		        		echo '<option value="'.$row["id"].'">'.$row["name"].
		        		'</option>';
				    }
				echo '</select>';
				} else {
				    echo "0 results";
				}
				
				$sql = "SELECT * FROM parts";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    echo '<p>Select Parts</p>';
				    echo '<select name="parts">' ;
				    while($row = $result->fetch_assoc()) {
				        //echo '<option " . $row["id"]; 
		        		echo '<option value="'.$row["id"].'">'.$row["name"].'
		        		</option>';
		        		echo "<br>";
		        		echo '<option value="'.$row["id"].'">'.$row["time"].'</option>';
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

