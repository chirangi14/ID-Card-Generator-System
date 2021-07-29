<?php 

	include('server.php');
?>

<html>
	<head>
		<title>Chage Password</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	
	<body>
		<div class="header">
			<h2>Change Password</h2>	
		</div>
		
		<form method="POST" action="change_password.php">
			<!-- display validation errors here -->
			<?php //include('errors.php'); ?>
			
			<div class="input-group">
				<label>Student Id<label>
				<input type="text" name="stud_id" required>
			</div>
			
			<div class="input-group">
				<label>New Password<label>
				<input type="password" name="new_pass"  required>
			</div>
			
			
			<div class="input-group">
				<button type="submit" name="submit_pass" class="btn">Submit</button> 
			</div>
			
			

		</form>
	</body>
</html>

