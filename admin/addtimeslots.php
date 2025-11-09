<?php
require_once "../header.php";
				$timeslot_id="";
			  $start_time="";
			  $end_time="";
			   
			  $type="";
				$id=0; 
				  
				   
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id>0){
        $query="SELECT * FROM timeslot where timeslot_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['timeslot_id'];
			  $start_time=$row['start_time'];
			  $end_time=$row['end_time'];
			   
			  $type=$row['type'];
			   
					}
        }else{
			$start_time="";
			  $end_time="";
			   
			  $type="";
				$id=""; 
			 
            }


?>
 <body>
 
      


<?php
            $msg='';
	  if(isset($_POST['submit'])){
            $type=$_POST['type'];
			  $start_time=$_POST['start_time'];
			  $end_time=$_POST['end_time'];
			    
			   
	          
      
      if($id>0){
			$query="update timeslot set start_time='$start_time',end_time='$end_time',type='$type' where timeslot_id='$id'";
			$result= mysqli_query($link, $query);
					alert("exam Type update successfuly.");
       
					redirect_to("viewtimeslots.php");
 
	 }else{
		 
		  
			$query="INSERT into timeslot(start_time,end_time,type) VALUES";
			$query.="('$start_time','$end_time','$type')";
			$result= mysqli_query($link, $query);
			 
				 if( mysqli_insert_id($link)){
				alert("Slot  added successfuly.");
       
				redirect_to("viewtimeslots.php");
    }else{
				$msg="course already exist";
        
    }
     
					}
    
}
	
?>
<div >
         </div>


	<div class="container">
			<h3> Add TimeSlot</h3>
	</div>
	<div class="container" id="form">
	      <form action="" method="POST" >
 <div class="form-group">
           <label for="name">Type:</label>
   <select type="text" class="form-control" id="type" name="type" value="<?php echo $type;?>" required="" Placeholder="Semester Name:" >
  <?php  if($id>0){
	  
	  ?>
	  <option value="<?php echo $type;?>"> <?php echo $type;?></option>
	  <option value="Paper">Paper</option>
	   <option value="Break">Break</option>
	   
	  <?php
	  
  }else{
	   
	  
?>
   <option value="Paper">Paper</option>
	   <option value="Break">Break</option>
  <?php } ?>
   
   </select> </div>
   <div class="form-group">
           <label for="name">Start Time:</label>
    <input type="time" class="form-control" id="start_time" name="start_time" value="<?php echo $start_time;?>"  Placeholder="course_code:" >
    </div>
   
    <div class="form-group">
           <label for="name">End Time:</label>
    <input type="time" class="form-control" id="end_time" name="end_time" value="<?php echo $end_time;?>"  Placeholder="course_code:" >
    </div>
  <div>
   <div class="form-group">
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 </div>

</body>




</html>
