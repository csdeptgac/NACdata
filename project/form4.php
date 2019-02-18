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
  <h2 class="text-center"> <span >Library details</span></h2>

  <br>
  <br>
<form action="form4db.php" method="post">
<div class="form-group">
      
	<div class="form-group">
      <label for="fname">Total number of books:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="tbook" required="true">
    </div>
        <div class="form-group">
      <label for="rno">Number of titles</label>
      <input type="number" class="form-control" id="rno" placeholder="Enter Register No" name="title" required="true">
    </div>
 
<div class="form-group">
      <label for="dept">Number of journals</label>
      <input type="text" class="form-control" id="dept" placeholder="Enter department" name="journals" required="true">
    </div>
  

   <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>	
 </form>

 </div>
</div>


 </html>