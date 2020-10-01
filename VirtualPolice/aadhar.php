<?php 
	  if(isset($_POST['submit'])){   
	  $name=$_POST['aadharno'];  
	  $db=mysqli_connect ("localhost", "root", "","aadhar") or die ('I cannot connect to the database  because: ' . mysqli_error()); 
	  $result=mysqli_query($db,"SELECT * FROM `verifi` WHERE  aadharno='$name'")or die("failed ".mysqli_error());  
	  while($row=mysqli_fetch_array($result)){ 
	          $mobileno=$row['mono'];
	  }
	  //$mobileno=$mono;}
	  echo "$mobileno";
	$msg="potta naayee veliya vaa da ";
	$username = "ruthruthsan@gmail.com";
	$hash = "6f431356d216b0111d4a8638a688c4ccf5a51e7ac6c0e2910ac4a0dd57b4f077";
	$test = "0";
	$sender = "TXTLCL"; 
	$numbers = "$mobileno";
	$message = "$msg";
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	  
	 }  
	  
?> 