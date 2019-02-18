<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    padding: 100px;
    margin-top: 100px;
  }
</style>
  </head>
<body>
<div class="container">

<div class="card" id="paper">
  <h2 class="text-center"> <span style="color: white">Number of Research papers in the journels notified on UGC</span></h2>

  <br>
  <br>
<form action="form3db.php" method="post">
<div class="form-group">
      
	<div class="form-group">
      <label for="fname"> Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname" required="true">
    </div>
        <div class="form-group">
      <label for="rno">Register No</label>
      <input type="number" class="form-control" id="rno" placeholder="Enter Register No" name=rno" required="true">
    </div>
      <div class="form-group">
      <label for="optradio">Gender:</label>
        <div class="form-check-inline">     
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="male">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="female">Female
  </label>
</div>
</div>
<div class="form-group">
      <label for="dept">Department</label>
      <input type="text" class="form-control" id="dept" placeholder="Enter department" name="dept" required="true">
    </div>
    <div class="form-group">
      <label for="pro">Title of Project</label>
      <input type="text" class="form-control" id="pro" placeholder="Enter project title" name="pro" required="true">
	  </div>
	  <div>
    
     <label for="pname">Programming Name</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter programming name" name="pname" required="true">
    </div>
	 <div class="form-group">
      <label for="intern"> Doing Internship</label>
      <input type="radio"  name="opt" value="Yes">Yes
    </div>
	<div class="form-group">
      
	   <input type="radio"  name="opt" value="No">No
    </div>
	<div class="form-group">
      <label for="link">link of your project</label>
      <input type="number" class="form-control" id="link" placeholder="Link of your project" name="link" required="true"> 
    </div>
   <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>	
 </form>

 </div>
</div>


 </html>