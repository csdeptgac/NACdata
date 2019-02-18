<?php
include('db.php');
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];


$q1="INSERT INTO `login` (`first_name`, `last_name`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password')";
$res=mysqli_query($con,$q1);
if($res){
	echo '<script>alert("registration is successful");location.href="login.php";</script>';
}
else{
	echo '<script>alert("registration is not successful");location.href="register.php";</script>';
}


?>