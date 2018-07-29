<html>
	<head>
		<title> Ford Focus RS </title>
		
		<link rel="stylesheet" type="text/css" href="style12.css">
		<style>
		select,option{display:inline;}
		</style>
    </head>
	<body> 
	<fieldset>
	<div>
		<h1 style="color: white;"> Ford Focus RS </h1>
		
		<center>
		<img src= "image/ford4.jpg" width="1800" height="300"  / ></center>
		
		<br>
		<div style="color: white; text-align:center;">The Ford Focus RS is the latest in a long-line of RS-badged fast Fords – cars on a mission to bring electrifying performance to people of normal means.
		What we have here is 345bhp from a tuned version of the Mustang’s 2.3-litre four-cylinder EcoBoost turbo engine channeled though a six-speed manual and a trick four-wheel drive system, 
		that can make the Ford Focus RS behave like it’s rear- instead of front-driven. Adaptive dampers, launch control, a rear wing and all the usability of a normal five-door Ford Focus EcoBoost</div><br>
		
		
	
		<div style="color: white; font-size:40px; text-align:center;"> Ford RS Engine Parts</div><br><br>

	 	<?php
	 		include('config.php');
	 			 		
			// $sql="select parts.* from parts inner join categories on categories.id = parts.categories_id inner join cars on cars.id = parts.cars_id";
			$sql = "select parts.*,images.image_name from parts inner join categories on categories.id = parts.categories_id inner join cars on cars.id = parts.cars_id inner join images on parts.id = images.parts_id where parts.cars_id =13 and parts.categories_id=1";

			$result = $conn->query($sql);

			if (!empty($result)) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	echo '<div style="float:left;margin-left:250px;">';
		    		echo '<input type="image" src="image/'.$row["image_name"].'" width="300" height="200" alt="Submit">';
		    		echo '<p style="color: white;">' . $row["name"]. ' <br> ' . $row["price"] . '</p>';			        
			        echo '<a href="registration.php">BUY</a>';
			        echo '</div>';
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
	 	?>
<br>

<br>
	 	

	</fieldset>
	</body>
	
</html>