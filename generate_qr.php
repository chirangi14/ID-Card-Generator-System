<?php

include('libs/phpqrcode/qrlib.php'); 

function getUsername($fname) {
	//$find = '@';
	//$pos = strpos($fname, $find); 
	//$username = substr($fname, 0, $pos);   
	return $fname;
}

if(isset($_POST['submit']) ) {
	$tempDir = 'uploads/'; 
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$stud_id =  $_POST['stud_id'];
	$mob =  $_POST['mob'];
	$spec = $_POST['spec'];
	
	$filename = getUsername($stud_id." ".$fname." ".$lname);
	
	
	$codeContents = '** Student Details **' ." \r\n". " \r\n". 'Full Name: '.$fname. " " .$mname. " " .$lname. "\r\n" . 'Specialization:'.urlencode($spec)."\r\n" . 'Student Id:'.urlencode($stud_id) . "\r\n" . 'Mobile Number:'.urlencode($mob) ;
   
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>(QR) Code Generator </title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightgrey;
}

.card
{
  background-color: #333;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size: 15px;
}
#qr
{
	margin-left: 200px;
}
#qr_result
{
	margin-right: 150px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

    </head>
	<body>
	
		<div class="card">
  <h1>ID Card Generator</h1>
</div>
<br/>
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <a href="fetch_stud_data.php">Student Details</a>
  <a href="generate_qr.php">Generate QR</a>
  <a href="insert_image.php">Upload Images</a>
  <a href="login.php">Log Out</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



			<h3><strong>Generate QR for Students</strong></h3>
			<div class="input-field" id="qr" >
				<form action="" method="POST">
					<input type="text" name="stud_id" placeholder="Enter Student ID" required><br><br>
					<input type="submit" name="search" value="SEARCH BY ID" > <br><br>

				</form>

				<?php
					$db = mysqli_connect('localhost:3310','root','','id-card_generator');
					if($db-> connect_error)
					{
						die("Connecction Failed:".$db-> connect_error);
					}

				if(isset($_POST['search']))
				{
					$stud_id=$_POST['stud_id'];

					$query ="SELECT * FROM student_details WHERE stud_id ='".$stud_id."'";
                              
                    $result =mysqli_query($db,$query);    

                    while ($row = mysqli_fetch_array($result))
                    {
                    	?>
    

				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>First Name</label>
						<input type="text" class="form-control" name="fname" style="width:20em;" value="<?php echo $row['first_name'] ?>" />
					</div>
					<div class="form-group">
						<label>Middle Name</label>
						<input type="text" class="form-control" name="mname" style="width:20em;" value="<?php echo $row['middle_name'] ?>" />
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" class="form-control" name="lname" style="width:20em;" value="<?php echo $row['last_name'] ?>" />
					</div>
					<div class="form-group">
						<label>Student Id</label>
						<input type="text" class="form-control" name="stud_id" style="width:20em;" value="<?php echo $row['stud_id'] ?>" />
					</div>
					<div class="form-group">
						<label>Mobile No.</label>
						<input type="text" class="form-control"  name="mob" style="width:20em;" value="<?php echo $row['phone'] ?>" />
					</div>
					<div class="form-group">
						<label>Specialization</label>
						<input type="text" class="form-control" name="spec" style="width:20em;"  value="<?php echo $row['specialization'] ?>" />
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-danger submitBtn" style="width:20em; margin:0;" />
					</div>
					<br><br>
				</form>

				 <?php
                   
                    }
				}

				?>

			</div>


			
			<?php
			if(!isset($filename)){
				$filename = "UnknownQR";
			}
			?>

			<div class="qr-field" id="qr_result">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="uploads/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-default submitBtn" style="width:210px; margin:5px 0;" href="download_qr.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			
	
	</body>

</html>