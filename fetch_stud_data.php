<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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



.table
{
	background-color: lightblue;
	width: 90%;
	margin-left: 10px;


}
.th
{
	background-color: grey;
	font-size: 19px;


}
.td
{
	text-align: center;
	font-size: 17px;


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

<div  style="padding-left:20px ; font-size:20px; clear: left;">
  <h2>Student Data</h2>
 <!-- <p>Resize the browser window to see how it works.</p>-->
</div>

<!--<div style="padding-right:150px ; font-size:20px; float: right;">
  <h2>Search Student ID</h2>
  <input type="text" name="search" placeholder="Enter Student Name">
  <!--<input type="button" name="btn_search" value="SEARCH BY NAME">
 <!-- <p>Resize the browser window to see how it works.</p>
</div>-->

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

</body>
</html>


<?php
				$db = mysqli_connect('localhost:3310','root','','id-card_generator');
				if($db-> connect_error)
				{
					die("Connecction Failed:".$db-> connect_error);
				}

				$sql="select * from student_details";
				$result= mysqli_query($db,$sql);

				if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="2"  class="table" >';
    echo '<tr class="th">';
    echo'<th>First Name</th>
    	<th>Middle Name</th>
        <th>Last Name</th>
        <th>Student ID</th>
        <th>Specialization</th>
        <th>Birth Date</th>
        <th>Gender</th>
        <th>Email ID</th>
        <th>Mobile No</th>';
    echo'</tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr class="td">';
        echo '  <td>' . $row["first_name"] . '</td>';
        echo '  <td>' . $row["middle_name"] . '</td>';
        echo '  <td>' . $row["last_name"] . '</td>';
        echo '  <td>' . $row["stud_id"] . '</td>';
        echo '  <td>' . $row["specialization"] . '</td>';
        echo '  <td>' . $row["birthday"] . '</td>';
        echo '  <td>' . $row["gender"] . '</td>';
        echo '  <td>' . $row["email"] . '</td>';
        echo '  <td>' . $row["phone"] . '</td>';
      
        echo '  </tr> ';
    }
    echo'</table>';
} else {
    echo "<br> No Record Found to display";
}



	
?>