<?php 
	
	include('server.php');
	
	
?>
<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="header">
			<h2>Register</h2>
		</div>
		
		<form method="POST" action="registration.php">
			<!-- display validation errors here -->
			<?php include('errors.php'); ?>
						
			<div class="input-group">	
				<label>Name<label>
				<input type="text" name="name" value="<?php echo $name;?>">
			</div>
			<div class="input-group" >	
				<label>Email Id<label>
				<input type="text" name="email" value="<?php echo $email;?>">
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign In </a>
			</p>
			
			
		</form>
	</body>
</html>

