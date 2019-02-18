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
<form action="form2db.php" method="post">
<div class="form-group">
      
	<div class="form-group">
      <label for="fname"> Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname" required="true">
    </div>
        <div class="form-group">
      <label for="lname">Email:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Email Name" name="lname" required="true">
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
      <label for="ncollege">Name of the College</label>
      <input type="text" class="form-control" id="ncollege" placeholder="Enter name of the college" name="ncollege" required="true">
    </div>
    <div class="form-group">
      <label for="tp">Title of Paper</label>
      <input type="text" class="form-control" id="tp" placeholder="Enter paper title" name="tp" required="true">
	  </div>
    
     <label for="author">Name of Author</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author name" name="author" required="true">
    </div>
	 <div class="form-group">
      <label for="nc">Department of the teacher</label>
      <input type="text" class="form-control" id="sno" placeholder="Enter name of the college" name="nc" required="true">
    </div>
	<div class="form-group">
      <label for="njournal">Name of Journal</label>
      <input type="number" class="form-control" id="njournal" placeholder="Enter name of journel" name="njournal" required="true">
    </div>
	<div class="form-group">
      <label for="yp">Year of publication</label>
      <input type="number" class="form-control" id="yp" placeholder="Enter year of publication" name="yp" required="true">
	  
    </div>
	<div class="form-group">
      <label for="ino">ISBN/ISSN Number</label>
      <input type="number" class="form-control" id="ino" placeholder="Enter ISBN/ISSN No." name="ino" required="true">
    </div>
	<div class="form-group">
      <label for="link">Link of therecognition in UGC enlistment of the journal</label>
      <input type="number" class="form-control" id="link" name="link" required="true">
    </div>
    <br>
    <div class="text-center">
	<input type="submit" value="submit" class="btn btn-primary">
</div>
 </form>

	</div>
 </div>

 </html>