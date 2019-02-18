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
      img{
        height: 30;
        width: 30;
      }
      .dataTables_wrapper .ui-toolbar{
        background-color: white;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
            var table=$('#example').DataTable();
            var table1=$('#example1').DataTable();

$('#dept').change(function(){
  var dept=$('#dept').val();
alert(dept);
table.clear().draw();            


        $.ajax({
      type: "post",
      url: "alltoo.php",
      data: {dept:dept},
      success: function (data) {
        console.log(data);
          data1=JSON.parse(data);
          data=data1.result;
          console.log(data1.total);
          $('#total').text(data1.total);
          console.log(Object.keys(data).length);
          console.log(data);
        $.each(data, function(key,value) {

         

          table.row.add($(
    '<tr>' +
    '<td>'+value.name+'</td>' +
    '<td>'+value.rollno+'</td>' +
        '<td>'+value.batch+'</td>' +

    '<td>'+value.department+'</td>' +
    '<td>'+value.mobile+'</td>' +
  '<td>'+value.mail+'</td>' +
    '<td>'+value.course+'</td>' +
    '<td>'+value.shift+'</td>' +
    



    '</tr>'
)).draw(false);
    

          }); 
          
        }
        });
      });





$('#dept1').change(function(){
  var dept=$('#dept1').val();
alert(dept);
table1.clear().draw();            


        $.ajax({
      type: "post",
      url: "facttoo.php",
      data: {dept:dept},
      success: function (data) {
        console.log(data);
          data1=JSON.parse(data);
          data=data1.result;
          console.log(data1.total);
          $('#total1').text(data1.total);
          console.log(Object.keys(data).length);
          console.log(data);
        $.each(data, function(key,value) {

         

          table1.row.add($(
    '<tr>' +
    '<td>'+value.name+'</td>' +
    '<td>'+value.department+'</td>' +
        '<td>'+value.join_data+'</td>' +

    '<td>'+value.designation+'</td>' +
    '<td>'+value.mobile+'</td>' +
  '<td>'+value.mail+'</td>' +
    '<td>'+value.userid+'</td>' +
    



    '</tr>'
)).draw(false);
    

          }); 
          
        }
        });
      });
      

       
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
                 <a href="intupload.php"> <div class="well">
                    <p id="total" class="text-center">Upload interior design</p>
                  </div></a>
                  <a href="intdisplay.php"><div class="well">
                    <p id="total" class="text-center">Display interior design</p>
                  </div></a>
                  <a href="extupload.php"><div class="well">
                    <p id="total" class="text-center">Upload exterior design</p>
                  </div></a>
                  <a href="extdisplay.php"><div class="well">
                    <p id="total" class="text-center">Display Exterior design</p>
                  </div></a>
              
                  <br>
                  <div class="text-center" style="margin-bottom: 100px">
                </div>
                </form>
                </div>
            </div>
  					
            <div class="col-lg-10 col-sm-10">
     <div class="card" style="background-color: white;padding: 20px">
  <h2 class="text-center" style="color: black">Upload interior design</h2>
  <form action="intdb.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="em">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Information:</label>
      <textarea name="info" class="form-control"></textarea> 
    </div>

     <div class="form-group">
      <label for="pwd">Image:</label>
      <input type="file" name="pimage" class="form-control"> 
    </div>
    <input type="hidden" name="type" value="0">
    
    <input type="submit" class="btn btn-primary" value="Submit">
  </form>
</div>
  				
  			</div>






		  </div>
		
    </div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  </body>
</html>