<?php
   require_once "connection.php";
require_once "functions.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="style.css">

   
    <link href="assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

    
    <link href="assets/fontawsome/css/all.css" rel="stylesheet" />

  <script src="assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
 
</head>

<body  >
       <h3> Classes Time Table </h3>
 <div class="text-center">
    <a  href="admin/index.php"  class="btn btn-success btn-lg">Admin</a>
	
	  <a  href="faculty/index.php"  class="btn btn-warning btn-lg">Faculty</a>
	   <a  href="student/index.php"  class="btn btn-danger btn-lg">Student</a>
	    
	 
  </div> 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="assets/img/lab1.jpg" alt="Chania">
        </div>

        
    </div>
</div>
   
</body>
</html>