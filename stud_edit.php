<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">
	<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Edit Data </h6>
	</div>

  <div class="card-body">
 <?php 
			$connection = mysqli_connect("localhost:3310","root","","id-card_generator");
			
            if(isset($_POST['edit_btn']))
            {
                $sr_no = $_POST['edit_sr_no'];
                
                $query = "SELECT * FROM registration WHERE sr_no='$sr_no' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

						<form action="code.php" method="POST">
		
		
							<input type="hidden" name="edit_sr_no" value="<?php echo $row['sr_no'] ?>">
		
							<div class="form-group">
								<label> Sr_No </label>
								<input type="number" name="edit_sr_no" value="<?php echo $row['sr_no'] ?>" class="form-control" placeholder="Enter Sr_NO">
							</div>
							<div class="form-group">
								<label> Name </label>
								<input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
								</div>
								<a href="stud_details.php" class="btn btn-danger"> CANCEL </a>
								<button type="submit" name="updatebtn"  class="btn btn-primary"> UPDATE </button>
		
								</form>
		
				<?php
                }
            }
        ?>



  </div>
	</div>
	</div>
	
	
  
<?php 

include('includes/footer.php');
include('includes/scripts.php');
?>