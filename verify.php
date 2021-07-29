<?php 
	if(isset($_GET['vkey']))
	{
		$vkey = $_GET['vkey'];
		
		$db = mysqli_connect('localhost','root','','id-card_generator');
		
		$resultset = $mysqli->query("select verified , vkey from registration WHERE verified  = 0 AND vkey = '$vkey' LIMIT 1");
		
		if($resultset->num_rows == 1)
		{
			$update = $mysqli->query("UPDATE registration SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
			
			if($update)
			{
				echo "Your account has been verified . You may now login.";
			}
			else
			{
				echo "Try again";
			}
		}
		else
		{
			echo "This account invalid or already verified";
		}
	}
	else
	{
		die("Something Went Wrong");
	}

?>