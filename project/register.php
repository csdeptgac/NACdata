<!DOCTYPE html>
<html>
<head>
<title> register page  design</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-image: url('bccc.jpg');
	}
	.card{
		background-color: grey;
	}
	 a { color: black; } 
</style>
</head>
<body>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
<div class="card" style="margin-top: 100px;padding: 20px">
	<div class="text-center">
<img src="qv.png" height="50" width="50" >
<h2>Registration</h2>
</div>

  <form action="register_b.php" name="registration" id="reg" method="post">

    <label for="firstname">UserName</label>
    <input type="text" name="firstname" id="firstname"  class="form-control" />

    <label for="lastname">Department</label>
    <input type="text" name="lastname" id="lastname"  class="form-control" />

    <label for="email">Email</label>
    <input type="email" name="email" id="email"  class="form-control" />

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" />
	
	<label for="password"> Confrim Password</label>
    <input type="password" name="password" id="password" class="form-control" />
    <br>
    <div class="text-center">
    <input type="submit" value="Register" class="btn btn-primary">
</div>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<p>If you have account<a href="login.php"> Login from here</a></p>


  </form>
</div>
</div>
</div>

</body>

</html>