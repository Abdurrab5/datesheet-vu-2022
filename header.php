<?php

   require_once "connection.php";
   require_once "functions.php"; 
   
    session_start();
   
   
      $header=$_SESSION['role'];
	  
	   require_once "navbar.php"; 
   
   
       
?>
 

     <!DOCTYPE html>
<html>
<head>
	<title></title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../style.css">

   
    <link href="../assets/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

    
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet" />
	 <link href="../assets/fontawesome/css/all.min" rel="stylesheet" />

    <script src="../assets/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
   
</head>

<body  >
<div >
         
     
</div>

   <div class="container-fluid"  >
   <div class="container">
   <div class="sidebar"> 
  
 
     <?php 
  
     if($header=='ADMIN'){?>
                  
 
	 	     <a  href="dashboard.php"   role="button">Dashbord</a>
		  
<a  href="viewfaculty.php"      ><i class="fa fa-user-circle" aria-hidden="true"></i>  Faculty</a>
<a  href="viewstudent.php"     ><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student</a>
	
			 <a  href="viewsemester.php"  ><i class="fa-solid fa-book"></i> Semester</a>
		     <a  href="viewcourse.php"  ><i class="fa-solid fa-book"></i> Courses</a>
			 <a  href="updatestudy.php"   ><i class="fa-solid fa-book"></i> Update StudyProgram</a>
		      <a  href="viewstudy.php"   ><i class="fa-solid fa-book"></i> StudyProgram</a>
			    <a  href="viewalotted.php"   ><i class="fa-solid fa-book"></i>Allotment</a>
		   
		      <a  href="viewexamtype.php"   ><i class="fa-solid fa-book"></i> Examtype</a>
		      <a  href="viewtimeslots.php"   ><i class="fa-solid fa-book"></i> Time Slots</a>
			  <a  href="viewexamlist.php"   ><i class="fa-solid fa-book"></i> Exam List</a>
		     
			 
		      <a  href="viewtimetable.php"   ><i class="fa-solid fa-book"></i> Exam Timetable</a>
		      <a  href="viewtimetablebyid.php"   ><i class="fa-solid fa-book"></i> View Timetable</a>
		    
		       <a  href="coursestdlist.php"   ><i class="fa-solid fa-book"></i>Subject wise list</a>
		     
			
			 			  
	    
<?php 
     }elseif($header=='FACULTY'){
		 
		 
?>
	            
	 
	         <a  href="dashboard.php"    class="<?phpif($page=='Dashboard'){ echo 'active';}?>" ><i class="fa-solid fa-gauge"></i>Dashboard</a>
			 <a  href="viewtimetable.php"   class="<?phpif($page=='View Timetable'){ echo 'active';}?>" > View Timetable</a>
	  
	  
	   
 <?php 
 
    }elseif($header=='STUDENT'){  
 ?>
 
                 
	 	       <a  href="dashboard.php"   class="<?phpif($page=='Dashboard'){ echo 'active';}?>" ><i class="fa-solid fa-gauge"></i>Dashboard</a>
			   <a  href="viewtimetable.php"   class="<?phpif($page=='View Timetable'){ echo 'active';}?>" > View Timetable</a>
			    
       
	
	 
	 
      <?php }
 
 ?></div> 
	 
 </div> 
 </div> 
 </div> 
	   