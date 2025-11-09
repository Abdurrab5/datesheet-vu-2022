<?php
require_once "../header.php";
 $examid="";
$id="";
$timeslotarray=array();
$courseid=array();
$date="";
$start_date="";
$end_date="";
 $pre="";
?>
 <div class="main">

 <?php
       
		if(isset($_GET['generate']) && $_GET['generate']!=''){
				$id=$_GET["generate"];

  $query="SELECT * FROM exam_type where status='active'  ";
		$result= mysqli_query($link,$query);
		$exam=0;
		   while( $row=mysqli_fetch_assoc($result)){
			 $examid=$row['type_id'];
			  $start_date=$row['start_date'];
			  $end_date=$row['end_date'];
			   
			  $status=$row['status'];
			  $exam++;
			   	}
					if($exam>0){
						
						 $busSql = "Select * from timeslot where type='Paper'";
             $resultBusSql = mysqli_query($link, $busSql);
                       $timeslot=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $timeslotarray[]=$row['timeslot_id'];
	            
		         $timeslot++;
	}

             $busSql = "Select * from program  ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $crs=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $courseid[]=$row['id'];
			   $semester=$row['semester'];
			   $crs++;
			   
	}


	
   $dates = getBetweenDates($start_date, $end_date);
    /*  echo '<pre>';
    print_r($courseid).'<br/>' ;
				 echo '</pre>';
			 */
	 
	/*  echo '<pre>';
    print_r($dates);
				 echo '</pre>'; */
							 
		
			
			
				$ci=0;
				//	for($k=0;$k<count($courseid);$k++){
						for($i=0;$i<count($courseid)/3;$i++){
						for($j=0;$j<count($timeslotarray);$j++){
			 
			
			
			//this code to be inserted
			
			if($ci<count($courseid)){
				 $course1=$courseid[$ci++];
				$date1=$dates[$i];
				$getsem=getsem($link,$course1);
				$time1=$timeslotarray[$j];
						/* 
						 echo $date1;
						echo $time1;
						echo $course1;
						echo $examid; 
						
						
						echo $getsem;
				//echo getco($link,$course1);
				echo '<br/>';
				 */
				//insert query 
				
							 $query="INSERT into timetable(examtype_id,timeslot_id,program_id,semester,date) VALUES";
			$query.="('$examid','$time1','$course1','$getsem','$date1')";
			$result= mysqli_query($link, $query); 
			$query="update exam_type set status='complete' where type_id='$examid'";
			$result= mysqli_query($link, $query);
			 redirect_to("viewtimetable.php"); 
 
			}
				
				
			//}
		}
			/* $date = $start_date; 
			$newdate = date("d",strtotime ( '$i day' , strtotime( $start_date)));
		echo  $start_date;
			 echo $newdate; */
			
			/* echo "<pre> ";
	print_r($courseid[$i]);
	echo "</pre> "; */



}
 
		
		echo " </div> ";
					
					}else{
						
					echo '<div class="main">Not Yet shedule</div> ';
						
					}
                     }
					 
					 
					 
					  function getBetweenDates($startDate, $endDate)
    {
        $rangArray = [];
            
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);
             
        for ($currentDate = $startDate; $currentDate <= $endDate; 
                                        $currentDate += (86400)) {
                                                
            $date = date('Y-m-d', $currentDate);
            $rangArray[] = $date;
        }
  
        return $rangArray;
    }
  
    function getco($link,$id){
			  $busSql = "Select * from program where id='$id'  ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $cr=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $course[]=$row['id'];
			   $pre=$row['prerequisit'];
			   
			   $cr++;
			   
	}
	return $pre;
		 }
		
		function getsem($link,$id){
			  $busSql = "Select * from program where id='$id' ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $cr=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $courseid[]=$row['id'];
			   $semester=$row['semester'];
			   
			   $cr++;
			   
	}
	return $semester;
		 }
?>	
  <div class="main">
  <div class="text-center text-danger">
  
  </div>
  </div>
</body>
</html>