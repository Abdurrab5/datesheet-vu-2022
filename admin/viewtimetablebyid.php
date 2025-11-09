<?php
require_once "../header.php";
  $id="";
	           $examtype_id= "";
			   $program_id="";
		        $semester="";
				 $date="";
				  $timeslot_id="";
 
				$result="";
?>
 

 <?php
       
		 
	
?>	
<div class="main" >
<div class="container-fluid" >
<div class="container" >
<div class="row">
<div class="col-8"> 
	   <form action="" method="get" >
		<div class="row">
		<div class="col-5">
        <input class="form-control me-2" type="date" name="date" placeholder="Search student by id" aria-label="Search">
        </div>
		<div class="col-6">
		<button class="btn btn-primary" type="submit">Search by day</button>
		</div>
		</div>
      </form>  
	  	</div>
<div class="col-4">
        <form action="" method="get" >
		<div class="row">
		<div class="col-6">
        <input class="form-control me-2" type="search" name="search" placeholder="Search student by id" aria-label="Search">
        </div>
		<div class="col-3">
		<button class="btn btn-info" type="submit">Search </button>
		</div>
		</div>
      </form> 
 </div  > 
</div  > 
<div class="row" > 
	  <div class="col">
      <form action="" method="get" >
		<div class="row">
		<div class="col-3">
        <input class="form-control me-2" type="date" name="datefrom" placeholder="date from" aria-label="Search">
        </div>
		<div class="col-3">
        <input class="form-control me-2" type="date" name="dateto" placeholder="date to" aria-label="Search">
        </div>
		<div class="col-3">
		<button class="btn btn-success" type="submit" name="daterange">Search by date</button>
		</div>
		</div>
      </form>  
		 	</div>	</div>

          <table class="table" id="table">
                    <thead>
					       <tr>
						   <h3> Timetable</h3>
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

if(isset($_GET['search']) && $_GET['search']!=''){
				$user=$_GET["search"];
 
 $busSql = "Select * from student where student_id='$user'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $s_id=$row['student_id'];
	            
		       $semester=$row['semester']; 
		        
	
 
			  echo checktimetable($link,$semester);
	
	}
}elseif(isset($_GET['date']) && $_GET['date']!=''){
				$sdate=$_GET["date"];
				
				echo timetablebydate($link,$sdate);
				
}elseif(isset($_GET['daterange'])){
				$datefrom=$_GET["datefrom"];
				$dateto=$_GET["dateto"];
				
			echo timetabledaterange($link,$datefrom,$dateto);
			
				
}else{
		echo timetable($link);
	 }
     














 function timetabledaterange($link,$datefrom,$dateto){
             $busSql = "Select * from timetable where date between '$datefrom' and '$dateto'";
             $result = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
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
		   }
  // check by student id
	
  
// all timetable

	 function timetable($link){
             $busSql = "Select * from timetable";
             $result = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
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
		   }
		   //search by date
   function timetablebydate($link,$date){
             $busSql = "Select * from timetable where date='$date'";
             $result = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
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
		   }
  // check by student id
	 function checktimetable($link,$id){
             $busSql = "Select * from timetable where semester='$id'";
             $result = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($result)){
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