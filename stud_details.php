<!DOCTYPE html>
<html>
<head>
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

/* Set a grey background color and center the text of the "sign in" section */
/*.signin {
  background-color: #f1f1f1;
  text-align: center;
}*/
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
                                <!--<li>
                                    <a class="gn-icon gn-icon-archive">Archives</a>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-article">Articles</a></li>
                                        <li><a class="gn-icon gn-icon-pictures">Images</a></li>
                                        <li><a class="gn-icon gn-icon-videos">Videos</a></li>
                                    </ul>
                                </li>-->
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
<form action="stud_details.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Student Details</h1>
    <p>Please fill in this form to generate your ID card.</p>
    <hr>

    <label ><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first_name" id="fname" required pattern="[a-zA-Z .]+" title="It should be characters only">

    <label ><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Middle Name" name="middle_name" id="mname" required pattern="[a-zA-Z .]+" title="It should be characters only">

    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="last_name" id="lname" required pattern="[a-zA-Z .]+" title="It should be characters only">
    <hr>
    
    <label ><b>Student ID</b></label>
    <input type="text" placeholder="Enter ID" name="stud_id" id="sid" required>
    <label ><b>Specialization</b></label>
    <!--<input type="text" placeholder="Enter Specialization" name="specialization" id="spec" required>-->
    <select name="specialization" class="spec" required>
    <option value="" disabled="disabled" selected="true">Select One..</option>
    <option value="MCA">MCA</option>
    <option value="MBA">MBA</option>

    </select>
    
    <label ><b>Birth Date</b></label>
    <input type="text" placeholder="Enter Birth Date (YYYY/MM/DD)" name="birthday" id="bday" required title="Format is (YYYY/MM/DD) , please enter birthdate using this formate only.." >
    
    <label ><b>Gender</b></label>
    <!--<input type="text" placeholder="Enter Gender" name="gender" id="gender" required>-->
    <select name="gender" class="gender" required>
    <option value="" disabled="disabled" selected="true">Select One..</option>
    <option value="MALE">MALE</option>
    <option value="FEMALE">FEMALE</option>
    </select>
    <hr>
    
    <label ><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    
    <label ><b>Mobile Number</b></label>
    <input type="number" placeholder="Enter Mobile Number" name="phone" id="phone" required pattern="[0-9.]+" title="It should be numbers only" maxlength="10">
    
    <label ><b>Upload Image</b></label>
    <input type="file" placeholder="Upload Your Decent Passport Size Image" name="avatar" id="avatar" required="Upload Your Decent Passport Size Image">

    <button type="submit" class="registerbtn" name="submit" >Submit</button>
  </div>
  
</form>

</body>
</html>

<?php
               
    $con = mysqli_connect("localhost:3310","root","","id-card_generator");



    if(isset($_POST["submit"]) && !empty($_FILES["avatar"]["name"]))
    {
       //$targetDir = "uploads/";
        
      $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
         $stud_id = $_POST['stud_id'];
        $specialization = $_POST['specialization'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $fileName = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"]; 
      
      $folder = "uploads/".$fileName;

          $qry_select = "select * from student_details where email= '$email'";
        $result_select = mysqli_query($con,$qry_select);
    
        if(mysqli_num_rows($result_select)>0)
        {
          echo '<script> alert("Email already exist!")</script>';
        }
        else
        {

            // Insert image file name into database
            $insert = "insert into student_details (first_name , middle_name , last_name , stud_id ,specialization , birthday , gender , email , phone , avatar) values ('$first_name' , '$middle_name' , '$last_name' , '$stud_id', '$specialization' , '$birthday' , '$gender' , '$email' , '$phone', '$fileName')"or die("<script>alert('Error');</script>");
            
             move_uploaded_file($tempname,$folder);



 if (mysqli_multi_query($con,$insert)) {
            
            echo '<script type="text/javascript">';
            echo ' alert("Your data saved Successfully !! You can not feel this form again, If any query please contact us..")';
            echo '</script>';  
            
        }
           else {   
            echo '<script type="text/javascript">';
            echo ' alert("Something went wrong , Please try again!!")';
            echo '</script>';
                }
            
   }          

        }
           

                      
    
?>
