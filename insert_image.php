<!DOCTYPE html>
<html>
<head>
  <title></title>
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


  <br>
  <br>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
    <table border="2" style="width: 70%;" align="center"  >
      <tr>
       <td height="50px" > <font size="5px" style="margin-left: 10px;"> Enter Student Id: </font> </td>
        <td height="50px"> <input type="text" name="stud_id" style="font-size: 20px; margin-left: 10px;">  </td>
      </tr>
    
     
   
      <tr>
        <td height="50px">
         <font size="5px" style="margin-left: 10px;"  > Select Student QR to Upload:
          </font>
        </td>
        <td height="50px">
          <input type="file" name="file" style="font-size: 20px; margin-left: 10px;"> 
       
        </td>
      </tr>
    
      <tr>
        <td colspan="2" align="center" height="50px" >
          <input type="submit" name="submit" value="Upload" style="font-size: 25px;">
        </td>
      </tr>
    
    </table>
</form>

</body>
</html>

