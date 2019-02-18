<?php
include('db.php');
$name=$_POST['fname'];
$rno=$_POST['rno'];
$gender=$_POST['optradio'];
$dept=$_POST['dept'];
$title=$_POST['pro'];
$program=$_POST['pro'];
$intern=$_POST['opt'];
$link=mysqli_real_escape_string($con, $_POST['link']);
$q1="INSERT INTO `form3` (`name`, `regno`, `gender`, `dept`, `title`, `program`, `intern`, `link`) VALUES ( '$name', '$rno', '$gender', '$dept', '$title', '$program', '$intern', '$link')";


$res=mysqli_query($con,$q1);
echo mysqli_error($con);
if($res){
	echo '<script>alert("insertion is successful");location.href="myform.php";</script>';
}
else{
	echo '<script>alert("insertion is not successful");location.href="myform.php";</script>';
}
?>