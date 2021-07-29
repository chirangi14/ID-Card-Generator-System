<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Send Mail</title>
    <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
    <meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

<style>

body
{
  background-color: white;
}
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
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
<center>
  <div class="row">
    <!--<div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>-->
    <div class="column">


<form action="" method="POST">
          <input type="text" name="sr_no" placeholder="Enter Sr No." required><br><br>
          <input type="submit" name="search" value="SEARCH Sr No." required> <br><br>

 </form>

        

<?php
          $db = mysqli_connect('localhost:3310','root','','id-card_generator');
          if($db-> connect_error)
          {
            die("Connecction Failed:".$db-> connect_error);
          }

        if(isset($_POST['search']))
        {
          $sr_no=$_POST['sr_no'];


          $query ="SELECT * FROM registration WHERE sr_no ='".$sr_no."'";
                              
                    $result =mysqli_query($db,$query);    

                    while ($row = mysqli_fetch_array($result))
                    {
                      ?>

                    <form name="myForm" action=""  method="post" >
                      <br><br>
                     <b>Email</b>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>"  style="border: 1px solid black;border-radius: 4px;"><br><br><br>
                 
                  <b>Subject</b>
                <input type="Text" name="sub" value="ID / PASSWORD" required size="16" style="border: 1px solid black;border-radius: 4px;"><br><br><br>

                  <b>Description</b>
                <textarea  rows="6" cols="60"  name="mess" style="border: 1px solid black;border-radius: 4px; white-space: pre-wrap; " >Please use this ID and Password for Login 
                 
                  Your ID : <?php
                      // generating unique id  
                      $myuid = uniqid("id1424@"); 
  
                      echo $myuid; 
            ?>

                  Your PASSWORD : <?php
                  function password_generate($chars) 
                  {
                      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
                      return substr(str_shuffle($data), 0, $chars);
                  }
                      echo password_generate(5)."\n";

            ?>
                     </textarea><br><br><br><br><br><br>

        

                <div align="center">
                <input class="btn btn-info" name="Submit"  value="Send"  type="submit"/>
                </div>
                </form>

                <?php
                   
                    }
        }

        ?>
    

<?php                      
                                       //  $msg = ""; 
                                        if(isset($_POST['Submit']))
                                        { 
                                            //$email = "rishu.raj231@gmail.com";

                                              $email=$_POST['email'];
											                       $subject=$_POST['sub'];
                                            $message=$_POST['mess'];

                                                                                        
                                            $headers="From:idcardsystem34@gmail.com";
                                           
                                            if(mail($email, $subject, $message, $headers)){
                                                  
                                                  echo '<script type="text/javascript">';
                                                  echo ' alert("Successfull")';
                                                  echo '</script>';
                                                }else{
                                                  echo '<script type="text/javascript">';
                                                  echo ' alert("Error")';
                                                  echo '</script>';
                                                }  
 										echo "<meta http-equiv='refresh' content='0;url=send_mail.php'>";  
                                        }
                                               
                                               
                                    ?>

</div>
</div>

</center>
  </body>
</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>