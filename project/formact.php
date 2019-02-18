<?php
include("db.php");
$fname=$_POST['firstname'];
$mail=$_POST['email'];
$gender=$_POST['gender'];
$rollno=$_POST['rollno'];
$course=$_POST['Course'];
$sem=$_POST['sem'];
$pass=$_POST['YOP'];
$title=$_POST['TOP'];

$q1="INSERT INTO `someinfo` (`name`, `email`, `gender`, `roll_no`, `course`, `semester`, `passyear`, `title`) VALUES ('$fname', '$mail', '$gender', '$rollno', '$course', '$sem', '$pass', '$title')";
$res=mysqli_query($con,$q1);
if($res){
	echo '<script>';
	echo 'alert("date inserted succesfully");location.href="form1.php"';
	echo '</script>';
}
else{
	echo '<script>';
	echo 'alert("something went wrong");location.href="form1.php"';
	echo '</script>';
}

?>