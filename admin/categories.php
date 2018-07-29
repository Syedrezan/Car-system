<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
</head>
<body>
	<?php include('menu.php'); ?>
	<div id="main">
		<h1>Add Car Categories</h1>
		<form action="catbase.php" method="POST">
			<p>Name</p>
			<input type="text" name="name">
			<br><br>
			<input type="submit" name="" value="Add">
		</form>
	</div>

</body>
</html>

