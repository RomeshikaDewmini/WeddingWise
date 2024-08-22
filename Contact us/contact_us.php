<?php  

include 'index.php';

if (isset($_POST['submit'])){

	$nic=$_POST['nic'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$email=$_POST['email'];
	$phoneNumber=$_POST['phoneNumber'];
	$message=$_POST['message'];
	
	$sql="insert into contact (nic,firstName,lastName,email,phoneNumber,message)
	values('$nic','$firstName','$lastName','$email','$phoneNumber','$message')";

	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "Data inserted sucessfully";
	}else
	{
		die (mysqli_error($con));
	}
}
?> 