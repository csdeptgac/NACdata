<?php
include("db.php");
$name=$_POST['name'];
$pass=$_POST['pass'];
$q1="select * from login where email='$name' and password='$pass'";
$res=mysqli_query($con,$q1);
if(mysqli_num_rows($res)==1){
	echo '<script>';
	echo 'alert("your login is succesful");location.href="myform.php"';
	echo '</script>';
}
else{

	echo '<script>';
	echo 'alert("your login is unsuccesful");location.href="login.php"';
	echo '</script>';
}

?>