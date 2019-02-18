<?php

include('db.php');
$fname=$_POST['fname'];
$mail=$_POST['lname'];
$dept=$_POST['nc'];
$gender=$_POST['optradio'];
$author=$_POST['author'];
$title=$_POST['tp'];
$college=$_POST['ncollege'];
$journal=$_POST['njournal'];
$year=$_POST['yp'];
$issn=$_POST['ino'];
$link=mysqli_real_escape_string($con, $_POST['link']);

$q1="INSERT INTO `form2` (`name`, `email`, `college`, `paper`, `author`, `dept`, `journal`, `publication`, `issn`, `ugc`) VALUES ('$fname', '$mail', '$college', '$paper', '$author', '$dept', '$journal', '$year', '$issn', '$link')";
$res=mysqli_query($con,$q1);
echo mysqli_error($con);
if($res){
	echo '<script>alert("insertion successful");location.href="myform.php";</script>';
}
else{
	echo '<script>alert("insertion is not successful");location.href="myform.php";</script>';
}



?>