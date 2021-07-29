<?php
session_start();


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $query = "INSERT INTO register WHERE username='$username' ";
    $query_run = mysqli_query($connection, $_query);
	
    if(mysqli_num_rows($query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            /*if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }*/
		}

	}
}	







$connection = mysqli_connect("localhost:3310","root","","id-card_generator");
if(isset($_POST['updatebtn']))
{
    $sr_no = $_POST['edit_sr_no'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
	
	    
    $query = "UPDATE registration SET name='$name', email='$email' WHERE sr_no='$sr_no' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: stud_details.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: stud_details.php'); 
    }
}


 if(isset($_POST['delete_btn']))
{
    $sr_no = $_POST['delete_sr_no'];

    $query = "DELETE FROM registration WHERE sr_no='$sr_no' ";
    $query_run = mysqli_query($connection, $query);
}
    if($query_run)
    {
        echo  "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: stud_details.php'); 
    }
    else
    {
       echo  "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: stud_details.php'); 
    }
?>  	