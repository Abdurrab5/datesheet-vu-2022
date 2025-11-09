
<?php
require_once "../header.php";
$page='Add Course';
				 $id="";
	           $course_id="";
	 
	 $program_id="";
	 $semester="";


?>
 
 
      <div class="main"> 
       
<div class="search">
 <form action="" method="get" >
		<div class="row">
		<div class="col-5">
        <div class="form-group">
    
     <select  class="form-control" type="text" name="course_id" id="course_id"   >
	  
  <option value=" ">Plz Select Course </option>
	  
		   
			 
			  <?php  
			  
		    $query="SELECT * FROM  program  ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $course_id=$row['id'];
			  
			  
			  
			  
			  ?>
			   
			  <option value='<?php echo $row['id'];  ?>'><?php echo $row['title'] ;  ?></option>
			  
			 
   <?php
		   }
			 ?>
  </select> </div>
   </div>
		<div class="col-3">
		<button class="btn btn-success" type="submit">Search</button>
		</div>
		</div>
      </form> 
	  </div>
<div class="container-fluid" >
<div class="container" >

<?php
             
	 if(isset($_GET['course_id']) && $_GET['course_id']!=''){
				$course_id=$_GET["course_id"];
              
			   
			   
			 
			  
		 
	    
			$query="select * from timetable   where program_id='$course_id'";
			$result= mysqli_query($link, $query);
					 $i=1;
    while($row = mysqli_fetch_assoc($result)){
		       $id=$row['timetable_id'];
	           $examtype_id= $row['examtype_id'];
			   $program_id=$row['program_id'];
		        $semester=$row['semester'];
				 $date=$row['date'];
				  $timeslot_id=$row['timeslot_id'];
		        $i++;
	}	

?>	
	 <table class="table" id="table">
                    <thead>
					       <tr>
						   <h3> <?php  
						   
						   echo getsubj($link,$program_id);
						   ?></h3>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>Student Id</th>
							<th>Username</th>
							</tr>
							</thead>
							<tbody>
							<?php
							
 $busSql = "Select * from student where semester='$semester'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $j=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $s_id=$row['student_id'];
	            
		       $username=$row['username']; 
		        $j++;
	
 
			  ?>
	

                                 <tr>
							        <td><?Php echo $s_id;?></td>
							       <td><?Php echo $username;?></td>
								    
							       
							
				                  
		                           </tr>
					</tbody>
	<?php
	
	}
	}
	
	
	
	
	
	function getsubj($link,$id){
			  $busSql = "Select * from program where id='$id' ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $cr=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $courseid[]=$row['id'];
			   $title=$row['title'];
			   
			   $cr++;
			   
	}
	return $title;
		 }
?>


 