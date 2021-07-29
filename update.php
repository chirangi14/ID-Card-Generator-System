<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>




<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Update Students Profile </h6>
  </div>

  <div class="card-body">
	<?php
	$connection = mysqli_connect("localhost:3310","root","","id-card_generator");
	
		if(isset($_POST['updatebtn']))
		{
			
		$sr_no = $_POST['edit_sr_no'];
		$username = $_POST['edit_username'];
		$email = $_POST['edit_email'];
    
    $query = "UPDATE registration SET username='$username', email='$email' WHERE sr_no='$sr_no' ";
    $query_run = mysqli_query($connection, $query);

			
			foreach($query_run as $row)
			{
				?>
				
				
			<form action ="stud_details.php" method="POST">
			<div class="form-group">
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"  value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"  value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password">
            </div>
			<a href="stud_details.php" class="btn btn-danger"> Cancel</a>
			<button class="btn btn-primary"> Update </button>
			</form>
            		<?php
			}
		}
	?>
</div>
</div>
</div>
		
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>