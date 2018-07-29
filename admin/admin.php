<!DOCTYPE html>
<?php session_start();?>
<html>

<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<style type="text/css">
		#stats >li{display: inline-block;}
		ul.child{list-style-type:none;}
		h1{
			color: black;
		}
	</style>
</head>
<body>
	<?php include('menu.php'); ?>
	<div id="main">
		<h1>Admin Dashboard</h1>

		<ul id="stats">
			<li>
				<ul class="child">
					<li><h2>
					<?php
						include('config.php');
						$sql = "SELECT count(*) FROM parts;";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo $row["count(*)"];
						    }
						} else {
						    echo "0";
						}
						//$conn->close();
					?>
				</h2></li>
					<li><p>Total Parts</p></li>
				</ul>
			</li>
			<li>
				<ul class="child">
					<li><h2>
						<?php
						include('config.php');
						$sql = "SELECT count(*) FROM cars;";
						$result = $conn->query($sql);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						     echo $row["count(*)"]. "<br>";
						    }
						} else {
						    echo "0 results";
						}

						mysqli_close($conn);
						?>
					</h2></li>
					<li><p>Total cars</p></li>
				</ul>
			</li>
			<li>
				<ul class="child">
					<li><h2>
						<?php
						include('config.php');
						$sql = "SELECT count(*) FROM parts;";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo $row["count(*)"];
						    }
						} else {
						    echo "0";
						}
						$conn->close();//WARNING!!remember to comment out this line if you include further php queries after this line
					?>
					</h2></li>
					<li><p>Total parts</p></li>
				</ul>
			</li>
		</ul>
		<li>
		<ul class="child">
					<li><h2>
						<?php
						include('../config.php');
						$sql = "SELECT count(*) FROM orders;";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo $row["count(*)"];
						    }
						} else {
						    echo "0";
						}
						$conn->close();//WARNING!!remember to comment out this line if you include further php queries after this line
					?>
					</h2></li>
					<li><p>Total orders</p></li>
				</ul>
			</li>
		</ul>

		<?php
		include('../config.php');
		echo ''
		?>
		<div style="float: left;"><?php include('time.php');?></div>
		
	</div>

</body>
</html>

