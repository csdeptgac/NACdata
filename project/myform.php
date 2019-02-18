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
    background-color: white;
    padding: 100px;
    margin-top: 100px;
  }

</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    $('#f1').click(function(){
      $('#form1').show();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    })


     $('#f2').click(function(){
      $('#form1').hide();
    $('#form2').show();
    $('#form3').hide();
    $('#form4').hide();
    })



     $('#f3').click(function(){
      $('#form1').hide();
    $('#form2').hide();
    $('#form3').show();
    $('#form4').hide();
    })


          $('#f4').click(function(){
      $('#form1').hide();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').show();
    })

          $('#mycol').change(function(){
            var val=$('#mycol').val();
            $('.card').css('background-color',val);
          })



  })
</script>
  </head>
<body>
<div class="container" style="margin-bottom: 100px">
  <div class="row" style="margin-top: 100px">

    <input type="color" name="" class="form-control" id="mycol">
    <br>

  </div>
  <div class="row">
    <div class="col-lg-3">
    <div class="well text-center" id="f1">
      form1
    </div>
    </div>


    <div class="col-lg-3">
    <div class="well text-center" id="f2">
      form2
    </div>
    </div>


    <div class="col-lg-3">
    <div class="well text-center" id="f3">
      form3
    </div>
    </div>

    <div class="col-lg-3">
    <div class="well text-center" id="f4">
      form4
    </div>
    </div>

  </div>








<div class="card" id="form1">
  <h2 class="text-center"> <span style="">Ph.Ds Awarded Per Teacher During last Five Years </span></h2>

  <br>
  <br>
<form action="form1db.php" method="post">
      
	<div class="form-group">
      <label for="fname"> Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter Name" name="fname" required="true">
    </div>
        <div class="form-group">
      <label for="lname">Email:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Email Name" name="lname" required="true">
    </div>
        <div class="form-group">
      <label for="dept">Department:</label>
      <input type="text" class="form-control" id="dept" placeholder="Enter Dept" name="dob" required="true">
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
    <div class="form-group">
      <label for="guide">Guide Name:</label>
      <input type="text" class="form-control" id="guide" placeholder="Enter guide name" name="guide" required="true">
	  </div>
    
     <label for="tt">Title of Thesis</label>
      <input type="text" class="form-control" id="tt" placeholder="Enter title of thesis" name="tt" required="true">
    </div>
	 <div class="form-group">
      <label for="nc">Name of the College:</label>
      <input type="text" class="form-control" id="sno" placeholder="Enter name of the college" name="nc" required="true">
    </div>
	<div class="form-group">
      <label for="sr">Scolar's Registration year</label>
      <input type="number" class="form-control" id="sr" placeholder="Enter registartion year" name="sr" required="true">
    </div>
	<div class="form-group">
      <label for="award">Year of award of PhD</label>
      <input type="number" class="form-control" id="award" placeholder="Enter year of award of PhD" name="award" required="true">
	  
    </div>
 <br>
    <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>
   </form>
</div>







<div class="card" id="form2">
  <h2 class="text-center"> <span >Number of Research papers in the journals notified on UGC</span></h2>

  <br>
  <br>
<form action="form2db.php" method="post">
      
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
    <div class="form-group">
    
     <label for="author">Name of Author</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author name" name="author" required="true">
    </div>
   <div class="form-group">
      <label for="nc">Department of the teacher</label>
      <input type="text" class="form-control" id="sno" placeholder="Enter name of the college" name="nc" required="true">
    </div>
  <div class="form-group">
      <label for="njournal">Name of Journal</label>
      <input type="number" class="form-control" id="njournal" placeholder="Enter name of journal" name="njournal" required="true">
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
      <label for="link">Link of the recognition in UGC enlistment of the journal</label>
      <input type="text" class="form-control" id="link" name="link" placeholder="Copy the link"required="true">
    </div>
    <br>
    <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>
 </form>

  </div>














<div class="card" id="form3">
  <h2 class="text-center"> <span >Total of Students Undertaking Internships and Projects</span></h2>

  <br>
  <br>
<form action="form3db.php" method="post">
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
    <div class="form-group"> 
    
     <label for="pname">Programme Name</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter programme name" name="pname" required="true">
    </div>
   <div class="form-group">
      <label for="intern"> Doing Internship</label><br>
      <input type="radio"  name="opt" value="Yes">Yes
    </div>
  <div class="form-group">
      
     <input type="radio"  name="opt" value="No">No
    </div>
  <div class="form-group">
      <label for="link">link of your project</label>
      <input type="text" class="form-control" id="link" placeholder="Link of your project" name="link" required="true"> 
    </div>
   <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>  
 </form>

 </div>





 <div class="card" id="form4">
  <h2 class="text-center"> <span >Library details</span></h2>

  <br>
  <br>
<form action="form4db.php" method="post">
      
  <div class="form-group">
      <label for="fname">Total number of books in the department</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter total books" name="tbook" required="true">
    </div>
        <div class="form-group">
      <label for="rno">Number of titles</label>
      <input type="number" class="form-control" id="rno" placeholder="Enter no of titles" name="title" required="true">
    </div>
 
<div class="form-group">
      <label for="dept">Number of journals</label>
      <input type="text" class="form-control" id="dept" placeholder="Enter no of journals" name="journals" required="true">
    </div>
  

   <div class="text-center">
  <input type="submit" value="submit" class="btn btn-primary">
</div>  
 </form>

 </div>













 </div>

 </html>