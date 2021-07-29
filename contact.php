<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Contact Us</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text],  textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  /*float:right;*/
  text-align: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<!--<li class="gn-search-item">
									<!--<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Personal Details</span></a>
								</li>-->
								<li><a class="gn-icon gn-icon-illustrator" href="index.php">Home</a></li>
								<li><a class="gn-icon gn-icon-illustrator" href="stud_details.php">Personal Details</a></li>
								<li><a class="gn-icon gn-icon-pictures" href="show_id.php">Digital Id Card</a></li>
								<!--<li><a class="gn-icon gn-icon-cog">About Us</a></li>-->
								<li><a class="gn-icon gn-icon-help" href="contact.php">Contact Us</a></li>
                <li><a class="gn-icon gn-icon-help" href="login.php">Log Out</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!--<li><a href="http://tympanus.net/codrops">Codrops</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>-->
				<li><!--<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a>--></li>
			</ul>
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

<div class="container">
  <div style="text-align:center">
  	<br/><br/>
    <h2>Contact Us</h2>
    <p>Leave us a message , hope we are solve it as early as possible</p>
  </div>
  <center>
  <div class="row">
    <!--<div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>-->
    <div class="column">

      <form action="contact.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="first_name" placeholder="Your first name.." required pattern="[a-zA-Z .]+" title="It should be characters only">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="last_name" placeholder="Your last name.." required pattern="[a-zA-Z .]+" title="It should be characters only">
        <label for="lname">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.." required>
        <!--<select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>-->
        <label for="subject">Subject</label>
        <!--<textarea id="subject" name="message" placeholder="Write something.." style="height:170px" required></textarea>-->
        <input type="text" name="message" placeholder="Write something.." style="height:170px" required pattern="[a-zA-Z .]+" title="It should be characters only" >
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
  </center>
</div>

</body>
</html>

<?php
   
    $con = mysqli_connect("localhost:3310","root","","id-card_generator");
    //$db = mysqli_select_db($con , "id-card_generator");

    if(isset($_POST ['submit']))
    {
        
        $first_name = $_POST['first_name']; 
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];


            
            
                $sql1 = "insert into contact (first_name , last_name ,  email ,  message) values ('$first_name' ,  '$last_name' , '$email' , '$message')";
                mysqli_query($con,$sql1);
                
                echo '<script> alert("Your recored has been successfully added..") </script>'; 

                /*if (mysqli_query($con , $sql1))
                {
                    echo '<script> alert("Successfully Added..") </script>'; 
                }
                else
                {
                    echo '<script> alert("Something Went Wrong..") </script>';                  
                }*/
             
    }     
         
    
?>
