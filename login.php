<?php 
	
	include('server.php');
	
?>

<html>
	<head>
		<title>Login Form</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	
	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		
		<form method="POST" action="login.php">
			<!-- display validation errors here -->
			<?php include('errors.php'); ?>
			
			<div class="input-group">
				<label>Student Name<label>
				<input type="text" name="name" value="<?php echo $name;?>" >
			</div>
			<div class="input-group">
				<label>Student Id<label>
				<input type="text" name="stud_id" value="<?php echo $stud_id;?>" >
			</div>
			<div class="input-group">
				<label>Password<label>
				<input type="password" name="pass" value="<?php echo $pass;?>">
			</div>
			
			<div class="input-group">
				<button type="submit" name="login" class="btn">LogIn</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" name="change_pass" class="btn">Change Password</button>
			</div>
			
			<div class="input-group">
			
				Not yet a member? <a href="registration.php">Sign Up </a> <br/> <br/>
	
			</div>

		</form>
	</body>
</html>

