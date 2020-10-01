<?php
Class dbObj{

var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "rural";
var $conn;
function getConnstring() {
 $db=mysqli_connect ("localhost", "root", "","rural") or die ('I cannot connect to the database  because: ' . mysqli_error()); 
 
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $db;
}
return $this->conn;
}
}
?>