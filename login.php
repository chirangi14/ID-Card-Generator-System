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
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="" method="POST">

                    <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-user" placeholder="Enter Name" required="">
                    </div>
                    <div class="form-group">
                    <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password" required="">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
					
					
					
					
					
					<div class="table-responsive">
	
	<?php
		$connection = mysqli_connect("localhost:3310","root","","adminpanel");
		if(isset($_POST ["login_btn"]))
  {
    $name = $_POST['name'];
    
    $pass = $_POST['password'];
    $_SESSION['success'] = ""; 
    
    
  
    $sql2 = "insert into login (name, password) values ('$name', '$pass')";
    mysqli_query($connection,$sql2);
    
    if(!$sql2)
    {
      echo '<script> alert("Something Went Wrong , Please Try Again!!") </script>';
    }
    else
    {
      $_SESSION['name'] = $name;
      echo '<script> alert("Successfully LogedIn.."); 
              
              window.location.href="home.php" ; 
              
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