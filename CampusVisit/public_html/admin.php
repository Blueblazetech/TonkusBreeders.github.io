<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];


	

$conn= new mysqli('localhost','root','','question4');
if($conn->connect_error){
	die('connection Failed:' .$conn->connect_error);
}

$sql='SELECT * FROM camp';
$result = mysqli_query($conn,$sql);
$camp = mysqli_fetch_all ($result, MYSQLI_ASSOC);
print_r($camp);
?>