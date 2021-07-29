<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="table-responsive">
<?php
		$connection = mysqli_connect("localhost:3310","root","","id-card_generator");
		$query = "SELECT * FROM contact";
		$query_run = mysqli_query($connection, $query);
		
	?>
	
	<center><h1> Contact </h1></center>
	
	<form>
      <table class="table table-bordered"  id="dataTable" width="100%" cellspacing="20px">
        <thead>
          <tr>
            <th>First_name</th>
            <th>Last_name </th>
            <th>Email </th>
            <th>Subject </th>
            
          </tr>
        </thead>
		
		<?php
		if(mysqli_num_rows($query_run)> 0)
		{
			while($row = mysqli_fetch_assoc($query_run))
			{
				?>
			
		
		
		<tr>
		<td><?php echo $row['first_name']; ?> </td>
		<td><?php echo $row['last_name']; ?> </td>
		<td><?php echo $row['email']; ?> </td>
		<td><?php echo $row['message']; ?> </td>
		
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
		 </form>
		 
		 <!-- /.container-fluid -->
<?php 

include('includes/footer.php');
include('includes/scripts.php');
?>