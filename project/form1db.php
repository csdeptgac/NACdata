<?php

include('db.php');
$fname=$_POST['fname'];
$mail=$_POST['lname'];
$dept=$_POST['dob'];
$gender=$_POST['optradio'];
$guide=$_POST['guide'];
$title=$_POST['tt'];
$college=$_POST['nc'];
$year=$_POST['sr'];
$award=$_POST['award'];
$q1="INSERT INTO `form1` (`name`, `email`, `dept`, `gender`, `guide`, `title`, `college`, `year`, `phd`) VALUES ('$fname', '$mail', '$dept', '$gender', '$guide', '$title', '$college', '$year', '$award')";
$res=mysqli_query($con,$q1);
echo mysqli_error($con);
if($res){
	echo '<script>alert("insertion successful");location.href="myform.php";</script>';
}
else{
	echo '<script>alert("insertion is not successful");location.href="myform.php";</script>';
}



?>