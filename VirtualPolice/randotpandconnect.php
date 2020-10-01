<?php
$conn = mysqli_connect('localhost','root','','complaindb');
if(!$conn)
{
	echo 'Not connected to server';
}
else
{
$districtname = $_POST['districtname'];
$areaname = $_POST['areaname'];
$name= $_POST['name'];
$gender = $_POST['gender'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$date=$_POST['bday'];
$description=$_POST['description'];
$aadharno=$_POST['aadhar'];
$sql = "INSERT INTO `complainantdetails`(`districtname`, `areaname`, `name`, `gender`, `address`, `subject`, `dateofcrime`, `description`, `aadharno`) VALUES ('$districtname','$areaname','$name','$gender','$address','$subject','$date','$description','$aadharno')";
if(!mysqli_query($conn,$sql))
{		
  echo '<script>window.alert("FAILED TO UPLOAD")</script>';
}
else
{
	//header("Location:otp.html");
  
	define('STDIN',fopen("php://stdin","r"));
	  //if(isset($_POST['submit'])){   
	  $name=$_POST['aadhar']; 
	echo "<script type='text/javascript'>window.alert('$name');</script>";
	  $db=mysqli_connect ("localhost", "root", "","aadhar") or die ('I cannot connect to the database  because: ' . mysqli_error()); 
	  $result=mysqli_query($db,"SELECT * FROM `aadharno` WHERE  aadharno='$name'")or die("failed ".mysqli_error());  
	  while($row=mysqli_fetch_array($result)){ 
	          $mobileno=$row['mono'];
	  }
	  //$mobileno=$mono;}
	echo "$mobileno";
	$otprand = rand(10000,99999);
	$msg="Your OTP is ".$otprand;
	$username = "coolrohith2000@gmail.com";
	$hash = "c6e099d9c5be433c5d4e2e29d596ef96fd1bac5922e4e7f98ec885fb591b3b90";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from
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
	$otpmob=0;


    //prompt function
    /*function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your name.";
    $name = prompt($prompt_msg);

    $output_msg = "Hello there ".$name."!";
    echo($output_msg);*/
	echo "<script>input=prompt('ENTER YOUR OTP !');</script>";
	//$answer = "<script type='text/javascript'> document.write(input); </script>";
	//echo "$answer";
	if($answer = $otprand)
	{
		echo "<script>alert('OTP verified');</script>";
         $message="You have successfully registered with VIRTUAL AARAKSHI!!!";
	echo "<script type='text/javascript'>window.alert('$message');</script>";
		echo "<script> location.href='success.html';</script>";
	}
	else
	{ echo"<script>prompt('otp failed');</script>";
      header('location:java.html');
	}

}
//header("Location:MAIN.htm");
}
?>