<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<html>
<body>

<div class="card-body">

<?php 
	if(isset($_SESSION['sucess'])&& $_SESSION['sucess'] !='')
	{
		echo '<h2> '.$_SESSION['sucess'].'</h2>';
		unset ($_SESSION['sucess']);
	}
	if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
	{
		echo '<h2 class="bg-info"> '.$_SESSION['status'].'</h2>';
		unset ($_SESSION['status']);
	}
	?>
	
<div class="table-responsive">

<?php
		$connection = mysqli_connect("localhost:3310","root","","id-card_generator");
		$query = "SELECT * FROM registration";
		$query_run = mysqli_query($connection, $query);
		
	?>
	
	
		<center><h1> Student Details </h1></center>
		
		
       
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sr_No</th>
            <th>Username </th>
            <th>Email </th>
            <th>EDIT </th> 
			 <th>DELETE </th>
          </tr>
        </thead>
        
		
		
		     <!--<th>
		     <td>
					<form action="code.php" method="post">
                    <input type="hidden" name="update_sr_no" value="<?php echo $row['sr_no']; ?>">
                    <button  type="submit" name="update_btn" class="btn btn-success"> UPDATE </button>
                </form>
            </td>
			</th>
			<br></br>
			
			<th>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_sr_no" value="<?php echo $row['sr_no']; ?>  ">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </th>-->
		  
		  
		  <?php
		if(mysqli_num_rows($query_run)> 0)
		{
			while($row = mysqli_fetch_assoc($query_run))
			{
				?>
			
		
		
		<tr>
		<td><?php echo $row['sr_no']; ?> </td>
		<td><?php echo $row['name']; ?> </td>
		<td><?php echo $row['email']; ?> </td>
		
				<td>
					<form action="stud_edit.php" method="post">
                  <input type="hidden" name="edit_sr_no" value="<?php echo $row['sr_no']; ?>  ">
                  <button type="submit" name="edit_btn" class="btn btn-primary"> EDIT</button>
                </form>
                </form>
				
				</td>
				
				<td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_sr_no" value="<?php echo $row['sr_no']; ?>  ">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          
           </tr>
		
            
		
        
		 <?php
			}
		}	
		 else
		{
			echo "No Record Found";
		}
		
        ?>
		
		 </table>
		 
				
    </div>
	
	 </body>
  </html>



<!-- /.container-fluid -->
<?php 

include('includes/footer.php');
include('includes/scripts.php');
?>