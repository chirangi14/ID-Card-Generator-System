<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Student Details</title>
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
  background-color: grey;
  margin-left: 370px;
  margin-right: 320px;
  margin-bottom: 70px;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=email], input[type=number], input[type=file] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus , input[type=email]:focus, input[type=number]:focus, input[type=file]:focus {
  background-color: #ddd;
  outline: none;
}

.spec , .gender
{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  cursor: pointer;
}
.spec:focus , .gender:focus
{
    background-color: #ddd;
    outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

table td{
	padding: 2px; 
	border: 3px solid black;
}
table th{
	padding: 5px; 
	border: 3px solid black;
}

#menu img{
      display:block; width:100%; height:auto;
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
                
                <li><!--<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a>--></li>
            </ul>
            
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>

<br/><br/><br/>

	<form action="" method="POST">
		<input type="text" name="stud_id" placeholder="Enter Student ID" required>
		<input type="submit" name="search" value="SEARCH BY ID">

	</form>
	 <table border="2" width="650px" align="center" style="margin-top: 40px; font-size: 40px; background-color:white; ">
    	<tr>
    		<th>Profile</th>
    		<th>QR</th>
    	</tr>			

<?php
if(isset($_POST['search']))
    { 
		
$db = mysqli_connect('localhost:3310','root','','id-card_generator');
				if($db-> connect_error)
				{
					die("Connecction Failed:".$db-> connect_error);
				}

					$stud_id=$_POST['stud_id'];
                    $query ="SELECT * FROM student_details WHERE stud_id ='".$stud_id."'";
                              
                    $result =mysqli_query($db,$query);    
   			
                   

                    while ($row = mysqli_fetch_array($result)) {
                    	 $stud_id=$row['stud_id'];


                            $query1=mysqli_query($db,"SELECT qr_image FROM show_idcard WHERE stud_id='".$stud_id."'");
                            $row1=mysqli_fetch_assoc($query1);


                      

                    ?>
                    	<tr >
                            <td align="center"> <img src="uploads/<?php echo $row['avatar'];?>"alt="avatar"  style="max-height:40%; max-width:30%; margin-top: 10px;" > </td>
                           <td align="center"> <img src="../system_user/uploads/<?php echo $row1['qr_image'];?>"alt="qr_image" style="max-height:50%; max-width:100%;  margin-top: 10px;"> </td>
                       </tr>

                       
                    <?php
                     }
                  }

                  

                     ?> 

         </table>

 </body>
</html>

