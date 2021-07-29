<?php
session_start();
include('includes/header.php'); 
?>




<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                
              </div>

                <form class="user" action="home.php" method="POST">

                    <div class="form-group">
                    <input type="text" name="text" class="form-control form-control-user" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                    <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password" required="">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
					
					
<!-- /.container-fluid -->

                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>

      
          <?php
    $db = mysqli_connect('localhost:3310','root','','adminpanel');

     if(isset($_POST ["login_btn"]))
  {
    $name = $_POST['name'];
    
    $pass = $_POST['pass'];
    $_SESSION['success'] = ""; 
    
  
  
    $sql2 = "insert into systemuser_login (name, pass) values ('$name','$pass')";
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
  }
  ?>
    
<?php
include('includes/scripts.php'); 
?>