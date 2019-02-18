
<?php

include('db.php');
$book=$_POST['tbook'];
$title=$_POST['title'];
$journals=$_POST['journals'];


$q1="INSERT INTO `library` (`book`, `title`, `journal`) VALUES ('$book', '$title', '$journals');";
$res=mysqli_query($con,$q1);
echo mysqli_error($con);
if($res){
	echo '<script>alert("insertion successful");location.href="myform.php";</script>';
}
else{
	echo '<script>alert("insertion is not successful");location.href="fmyform.php";</script>';
}



?>