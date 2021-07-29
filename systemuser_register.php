<?php

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
                <h1 class="h4 text-gray-900 mb-4">Register Here!</h1>
               
              </div>

                <form class="user" action="" method="POST">

                    <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Name" required="">
                    </div>
                     <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email" required="">
                    </div>
                    <div class="form-group">
                    <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password" required="">
                    </div>
            
                    <button type="submit" name="register_btn" class="btn btn-primary btn-user btn-block"> Register </button>
                   
          
          
          
          
          
          <div class="table-responsive">
  
  <?php
    $connection = mysqli_connect("localhost:3310","root","","adminpanel");
    if(isset($_POST ["register_btn"]))
  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    
  
    $sql2 = "insert into systemuser_register (username, email , password) values ('$username', '$email' ,'$password')";
    mysqli_query($connection,$sql2);
    
    if(!$sql2)
    {
      echo '<script> alert("Something Went Wrong , Please Try Again!!") </script>';
    }
    else
    {
      
      echo '<script> alert("Successfully "); 
              
              window.location.href="login.php" ; 
              
          </script>';
    }
  }
  ?>
    
  
    </tbody>
     
    </div>
  </div>
</div>

</div>
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
include('includes/scripts.php'); 
?>