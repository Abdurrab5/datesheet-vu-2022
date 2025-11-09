<?php
require_once "../header.php";
 
  $user=$_SESSION['student'];
$semester="" ; 
?>
 

 <?php
       
		 $busSql = "Select * from student where username='$user'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $s_id=$row['student_id'];
	            
		       $semester=$row['semester']; 
		        
	}			   
	 
?>	



<div class="container" >
         <h4>
         view Timetable 
		 </h4>

         <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>Timetable Id</th>
							<th>Examtype Id</th>
			
							
							<th>Course</th>
							<th>Semester</th>
							<th>date</th>
							<th>Time</th>
							
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from timetable where semester='$semester'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['timetable_id'];
	           $examtype_id= $row['examtype_id'];
			   $program_id=$row['program_id'];
		        $semester=$row['semester'];
				 $date=$row['date'];
				  $timeslot_id=$row['timeslot_id'];
		        $i++;
                                    

   ?>
	

                                 <tr>
							        <td><?Php echo $id;?></td>
							       <td><?Php echo $examtype_id;?></td>
								    
							        <td><?Php echo getsubj($link,$program_id);?></td>
							       <td><?Php echo $semester;?></td>
							        <td><?Php echo $date;?></td>
							       <td><?Php echo gettime($link,$timeslot_id);?></td>
							
				                  
		                           </tr>
					</tbody>
	<?php
	}
	function gettime($link,$id){
			  $busSql = "Select * from timeslot where timeslot_id='$id' ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $cr=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['timeslot_id'];
			   $start_time=$row['start_time'];
			    $end_time=$row['end_time'];
			   
			   $cr++;
			   
	}
	return $start_time; 
	
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
	</div>
	</div>
	</div>
</body>
</html>