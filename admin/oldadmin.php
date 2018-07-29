<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="css1/style1.css">
	</head>
	<body>
		<h1 class="project_heading">Welcome Admin</h1>	
		<form method="POST" action="add2.php">
			<fieldset style="margin-top:120px" >
			
				<legend> Admin Login Form </legend>
				<table  border="10">
					<tr>
						<td><label for="Admin_id"> ID:</label></td>
						<td><input type="number" id="Admin_id" name="Admin_id" placeholder="Enter ID.."/></td>
					</tr>
					<tr>
						<td><label for="Admin_password"> Password:</label></td>
						<td><input type="password" id="Admin_password" name="Admin_password" placeholder="Enter password.." required /></td>
					</tr>
					<tr>
						<td colspan="2" class="form_button">
							<input type="submit" name="submit" class="submit_button" value="Submit"/>
							<input type="reset" />
						</td>
					</tr>
				</table>
			</fieldset>
		</form>	
	</body>
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
		$("docunemt").ready(function(){
			
			$(".submit_button").click(function(){
				var adminId = $("#admin_id").val();
				var adminPassword = $("#admin_password").val();
				if(adminId == ''){
					alert("Please enter Admin id");
					$("#admin_id").css("background", "pink");
				} else if(adminPassword == ''){
					alert("Please enter admin password");
					$("#admin_password").css("background", "pink");
				}
				
			});
			
		});
		$("#admin_id").keyup(function(){
			var adminId = $("#admin_id").val();
			if(adminId == ''){
				$(this).css("background", "pink");
			}else{
				$(this).css("background", "white");
			}
		});
		$("#admin_password").keyup(function(){
			var adminPassword = $("#admin_password").val();
			if(adminPassword == ''){
				$(this).css("background", "pink");
			}else{
				$(this).css("background", "white");
			}
		});
	</script>
</html>