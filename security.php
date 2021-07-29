<?php

include('includes/header.php'); 
include('includes/navbar.php'); 
include('dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: dbconfig.php");
}

 
?>
