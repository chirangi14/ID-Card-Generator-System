<?php 
	echo uniqid("ST-");
	
	echo "<br/>";
	
	echo mt_rand(15, 50); 
	
	echo "<br/>";
	
	$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@123456789";
	echo substr(str_shuffle($string),0,6);
		echo "<br/>";
		
		
	

?>
<?php
    $number = uniqid();
    $varray = str_split($number);
    $len = sizeof($varray);
    $otp = array_slice($varray, $len-10, $len);
    $otp = implode(",", $otp);
    $otp = str_replace(',', '', $otp);
    print_r($otp);
	echo "<br/>";
?>

