<?php 
	
	$name="";
	$email="";
	$stud_id="";
	$pass="";
	
	$new_pass="";
	
	
	$errors=array();
	
	// Database Connection
	$db = mysqli_connect('localhost:3310','root','','id-card_generator');
	
	// click on registration button
	if(isset($_POST	["register"]))
	{
		//$email = mysqli_real_escape_string($db , $_POST['email']);
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		// ensure that form fields are filled properly
		if(empty($name))
		{
			array_push($errors,"Name is required");
		}
		if(empty($email))
		{
			array_push($errors,"Email is required");
		}
		
		//$vkey = md5(time().$name);
		
		//$p = md5($p);
		
		
		$qry_select = "select * from registration where email= '$email'";
		$result_select = mysqli_query($db,$qry_select);
		
		if(mysqli_num_rows($result_select)>0)
		{
			echo '<script> alert("Email already exist!")</script>';
		}
		else
		{
			// if there are no errors , save email to database
			if(count($errors) == 0)
			{
			
				$sql = "insert into registration (name , email ) values ('$name' , '$email')";
				mysqli_query($db,$sql);
				
				echo '<script> alert("Successfully Added.."); 
							alert("Please wait for some time and get your id and password through email");
							window.location.href="login.php" ; 
							
					</script>';
				
			}
			
		}
			
	}
	session_start();
	
	if(isset($_POST	["login"]))
	{
		$name = $_POST['name'];
		$stud_id = $_POST['stud_id'];
		$pass = $_POST['pass'];
		$_SESSION['success'] = ""; 
		
		// ensure that form fields are filled properly
		if(empty($stud_id))
		{
			array_push($errors,"Student Id is required");
			
		}
		if(empty($pass))
		{
			array_push($errors,"Password is required");
			//echo mt_rand(15, 50);
			
			
		}
		
		
	
		$sql2 = "insert into login (name, stud_id , pass) values ('$name','$stud_id' , '$pass')";
		mysqli_query($db,$sql2);
		
		if(!$sql2)
		{
			echo '<script> alert("Something Went Wrong , Please Try Again!!") </script>';
		}
		else
		{
			$_SESSION['name'] = $name;
			echo '<script> alert("Successfully LogedIn.."); 
							
							window.location.href="index.php" ; 
							
					</script>';
		}
		
		/*if($stud_id!='' && $pass!='')
		{
			echo '<script> alert("Please change your password first!") </script>';
			
		}*/
		
		
		
		/*if($stud_id && $pass == 0)
		{
		
			$sql_login = "SELECT * FROM login WHERE stud_id = '$stud_id' AND pass = '$pass' ";
			$result_login = mysqli_query($db , $sql_login); 
			$numrows = mysqli_num_rows($result_login);
			if($numrows > 0)
			{
				echo '<script> alert("Succssfully LogedIn");
									window.location.href="home.php";
				</script>';
			}
		
			else
			{
				echo '<script> alert("Student Id and Password not match Please try again!") </script>';
			}
		}*/
		
		
	}
	
	if(isset($_POST["change_pass"]))
	{
		header("location:change_password.php");
	}
	
	
	if(isset($_POST["submit_pass"]))
	{
		
		$stud_id=$_POST['stud_id'];
		
		$new_pass=$_POST['new_pass'];
			
			$qry1 = "Select * from login where stud_id='$stud_id'";
			$result1 = mysqli_query($db,$qry1);
			
			if(mysqli_num_rows($result1) > 0)
			{
				echo '<script> alert("Student id match!")</script>';
				
				if($result1)
				{
					$qry = "UPDATE login SET pass='".$new_pass."' where stud_id='".$stud_id."'";
					$result = mysqli_query($db,$qry);
					echo '<script> alert("Password Successfully Changed !");
							window.location.href="login.php" ; 
					</script>';
					
				}
								
			}
			else
			{
				echo '<script> alert("Student Id does not match please try again !");
								window.location.href="login.php" ; 
				</script>';
			}
	}
	
	
?>

