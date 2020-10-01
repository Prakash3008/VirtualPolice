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
   $message="You have successfully registered with VIRTUAL AARAKSHI!!!";
	echo "<script type='text/javascript'>window.alert('$message');</script>";
	//header("Location:otp.html");

}
//header("Location:MAIN.htm");
}
?>