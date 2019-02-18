<!DOCTYPE html>
<html>
<head>
<title> login page  design</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script></head>
  <style type="text/css">
  body{
		background-image: url('bccc.jpg');
	}
	.card{
		background-color: grey;
		padding: 20px;
	}
    a { color: black; } 
  </style>
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 200px">
		<div class="col-lg-6 offset-3">
			<div class="card">
<h1 class="text-center"> Login here! </h1>
<form action="loginb.php" method="post"> 
<p> UserName</p>
<input type="text" name="name" placeholder=" Enter UserName" class="form-control">
<br>
<p>Password</p>
<input type="password" name="pass" placeholder=" Enter password" class="form-control">
<br>
<br>
<div class="text-center" style="margin-bottom: 20px">
<input type="submit" name="" value="Login" class="btn btn-primary">
</div>

<p>If you dont have account<a href="register.php"> Register from here</a></p>

</form>
</div>
</div>
</div>
</div>

</body>

</html>