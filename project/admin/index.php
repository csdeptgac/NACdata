<?php
session_start();
if(!isset($_SESSION['uname'])){
	echo '<script>';
	echo 'alert("please login via login form");location.href="login.php"';
	echo '</script>';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	body{
    		background-color: #002a5c;
    	}
      h3{
        color: white;
      }
      img{
        height: 30;
        width: 30;
      }
      .dataTables_wrapper .ui-toolbar{
        background-color: white;
      }
      table{
        padding: 10px;
      }

    </style>
    <script type="text/javascript">
      $(document).ready(function(){
         $('#example1').DataTable();
           $('#example2').DataTable();
         $('#example3').DataTable();
         $('#example4').DataTable();
         $('#example5').DataTable();


         $('#f1').hide();
           $('#f2').hide();
         $('#f3').hide();
         $('#f4').hide();
         $('#f5').hide();


$('#ff1').click(function(){
 $('#f1').show();
           $('#f2').hide();
         $('#f3').hide();
         $('#f4').hide();
         $('#f5').hide();

       })



$('#ff2').click(function(){
 $('#f2').show();
           $('#f1').hide();
         $('#f3').hide();
         $('#f4').hide();
         $('#f5').hide();

       })




$('#ff3').click(function(){
 $('#f3').show();
           $('#f2').hide();
         $('#f1').hide();
         $('#f4').hide();
         $('#f5').hide();

       })




$('#ff4').click(function(){
 $('#f4').show();
           $('#f2').hide();
         $('#f3').hide();
         $('#f1').hide();
         $('#f5').hide();

       })



$('#ff5').click(function(){
 $('#f5').show();
           $('#f2').hide();
         $('#f3').hide();
         $('#f4').hide();
         $('#f1').hide();

       })




      

       
      })

    </script>
  </head>
  <body>
  	<div class="header" style="background-color: white">
	     <div class="container">
	     	
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html" style="color: black">Admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	              
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav" >
	                       
	                          <li><a href="logout.php" class="btn btn-success" style="color: black">Logout</a></li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
      
    	<div class="row">
		 

      <div class="col-lg-2 col-sm-2">

      

    


      
                <div class="card">
                  <h3 class="text-center" style="color: white">Options</h3>
                  <form class="from-group" action="upload.php" method="post" enctype="multipart/form-data">


                 <div class="well" id="ff1">
                    <p id="total" class="text-center">All users</p>
                  </div>
              <div class="well" id="ff2">
                    <p id="total" class="text-center">Form1</p>
                  </div>
                 <div class="well" id="ff3">
                    <p id="total" class="text-center">Form2</p>
                  </div>
            <div class="well" id="ff4">
                    <p id="total" class="text-center">Form3</p>
                  </div>
                  <div class="well" id="ff5">
                    <p id="total" class="text-center">Form4</p>
                  </div>
              
                  <br>
                  <div class="text-center" style="margin-bottom: 100px">
                </div>
                </form>
                </div>
            </div>
  					
            <div class="col-lg-10 col-sm-10" style="margin-top: 100px">
              <div id="f1">
                <h3 >Allusers</h3>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1" style="color: blue">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
               
                
              </tr>
            </thead>
            <tbody>
              <?php
              include('db.php');

              $q1="select * from login";
              $res=mysqli_query($db,$q1);
              while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                  <td><?php echo $row['first_name'] ?></td>
                   <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>


                </tr>
                <?php
              }
              ?>
              </tbody>
          </table>
        </div>

              <div id="f2">

                <h3>Ph.Ds Awarded Per Teacher During last Five Years
</h3>
             <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2" style="color: blue">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                                <th>Gender</th>


                  <th>Guide</th>
                <th>Title</th>
                <th>College</th>
                <th>Year</th>
                <th>Phd</th>

              </tr>
            </thead>
            <tbody>

                     <?php
              include('db.php');

              $q1="select * from form1";
              $res=mysqli_query($db,$q1);
              while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                  <td><?php echo $row['name'] ?></td>
                   <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['dept'] ?></td>

                     <td><?php echo $row['gender'] ?></td>
                   <td><?php echo $row['guide'] ?></td>
                    <td><?php echo $row['title'] ?></td>


                
                    <td><?php echo $row['college'] ?></td>

                     <td><?php echo $row['year'] ?></td>
                   <td><?php echo $row['phd'] ?></td>


                </tr>
                <?php
              }
              ?>

              </tbody>
          </table>

</div>

              <div id="f3">
                <h3>Number of Research papers in the journels notified on UGC
</h3>

             <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example3" style="color: blue">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>College</th>
                                <th>Paper</th>


                  <th>Author</th>
                <th>Department</th>
                <th>Journal</th>
                <th>Pulication</th>
                <th>ISSN</th>
                <th>UGC</th>
                
              </tr>
            </thead>
            <tbody>



                     <?php
              include('db.php');

              $q1="select * from form2";
              $res=mysqli_query($db,$q1);
              while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                  <td><?php echo $row['name'] ?></td>
                   <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['college'] ?></td>

                     <td><?php echo $row['paper'] ?></td>
                   <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['dept'] ?></td>


                
                    <td><?php echo $row['journal'] ?></td>

                     <td><?php echo $row['publication'] ?></td>
                   <td><?php echo $row['issn'] ?></td>
                                      <td><?php echo $row['ugc'] ?></td>



                </tr>
                <?php
              }
              ?>

              </tbody>
          </table>
</div>

              <div id="f4">
                <h3>Total of students undertaking internship and projects
</h3>


   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example4" style="color: blue">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Register no</th>
                <th>Department</th>

                  <th>Title</th>
                <th>Program</th>
                <th>Intern</th>
                <th>Link</th>
                
              </tr>
            </thead>
            <tbody>

                   <?php
              include('db.php');

              $q1="select * from form3";
              $res=mysqli_query($db,$q1);
              while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                  <td><?php echo $row['name'] ?></td>
                   <td><?php echo $row['regno'] ?></td>
                    <td><?php echo $row['gender'] ?></td>

                     <td><?php echo $row['dept'] ?></td>
                   <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['program'] ?></td>


                
                    <td><?php echo $row['intern'] ?></td>

                     <td><?php echo $row['link'] ?></td>



                </tr>
                <?php
              }
              ?>

              </tbody>
          </table>
        </div>
                      <div id="f5">
                        <h3>Library Details</h3>


   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example5" style="color: blue">
            <thead>
              <tr>
                <th>book</th>
                <th>title</th>
                <th>journal</th>
             
                
              </tr>
            </thead>
            <tbody>



                   <?php
              include('db.php');

              $q1="select * from library";
              $res=mysqli_query($db,$q1);
              while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                  <td><?php echo $row['book'] ?></td>
                   <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['journal'] ?></td>




                </tr>
                <?php
              }
              ?>

              </tbody>
          </table>



  				</div>
  			</div>








		  </div>
		
    </div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  </body>
</html>