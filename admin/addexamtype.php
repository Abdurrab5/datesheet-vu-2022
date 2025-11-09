<?php
require_once "../header.php";
				$type_id="";
			  $start_date="";
			  $end_date="";
			   
			  $status="";
				$id=""; 
				  
				   
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id!=""){
        $query="SELECT * FROM exam_type where type_id='$type_ssid'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['type_id'];
			  $start_date=$row['start_date'];
			  $end_date=$row['end_date'];
			   
			  $status=$row['status'];
			   
					}
        }else{
			$type_id="";
			  $start_date="";
			  $end_date="";
			    
			  $status="";
			 
            }


?>
 <body>
 
      


<?php
            $msg='';
	  if(isset($_POST['submit'])){
            $type_id=$_POST['type_id'];
			  $start_date=$_POST['start_date'];
			  $end_date=$_POST['end_date'];
			    
			   
	          
      
      if($id!=""){
			$query="update exam_type set start_date='$start_date',end_date='$end_date',status='$status' where type_id='$id'";
			$result= mysqli_query($link, $query);
					alert("exam Type update successfuly.");
       
					redirect_to("viewsemester.php");
 
	 }else{
		 
		  $query="SELECT * FROM exam_type where type_id='$type_id'   ";
		$result= mysqli_query($link,$query);
		$check=0;
		   while( $row=mysqli_fetch_assoc($result)){
			  $type_id=$row['type_id'];
			  $check++;
			   
					}
					if($check>0){
						
					$msg="Exam Type already exist";	
						
					}else{
			$query="INSERT into exam_type(type_id,start_date,end_date,status) VALUES";
			$query.="('$type_id','$start_date','$end_date','active')";
			$result= mysqli_query($link, $query);
			 
				alert("semester add successfuly.");
       
				redirect_to("viewexamtype.php");
     
					}
    
}
	}
?>
<div >
         </div>


	<div class="container">
			<h3 style="color:lightblue"> Add course</h3>
	</div>
	<div class="container" id="form">
	      <form action="" method="POST" >
 <div class="form-group">
           <label for="name">Exam Type:</label>
   <select type="text" class="form-control" id="type_id" name="type_id" value="<?php echo $id;?>" required="" Placeholder="Semester Name:" >
  <?php  if($id>0){
	  
	  ?>
	  <option value="<?php echo $id;?>"> <?php echo $id;?></option>
	  <option value=" <?php   
	 echo $date="Spring-".date('Y');
	  ?>"> 	   <?php   
	 echo $date="Spring-".date('Y');
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date('Y');
	  ?>"> 	   <?php   
	 echo $date="Fall-".date('Y');
	  ?></option>
	    <option value="<?php   
	 echo $date="Spring-".date("Y",strtotime("-1 year"));
	  ?>"> 	   <?php   
	 echo $date="Spring-".date("Y",strtotime("-1 year"));
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date("Y",strtotime("-1 year"));
	  ?>"> 	   <?php   
	 echo $date="Fall-".date("Y",strtotime("-1 year"));
	  ?></option>
	   <option value="<?php   
	 echo $date="Spring-".date("Y",strtotime("+1 year"));
	  ?>"> 	   <?php   
	 echo $date="Spring-".date("Y",strtotime("+1 year"));
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date("Y",strtotime("+1 year"));
	  ?>"> 	   <?php   
	 echo $date="Fall-".date("Y",strtotime("+1 year"));
	  ?></option>
	  <?php
	  
  }else{
	   
	  
?>
  <option value=" <?php   
	 echo $date="Spring-".date('Y');
	  ?>"> 	   <?php   
	 echo $date="Spring-".date('Y');
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date('Y');
	  ?>"> 	   <?php   
	 echo $date="Fall-".date('Y');
	  ?></option>
	    <option value="<?php   
	 echo $date="Spring-".date("Y",strtotime("-1 year"));
	  ?>"> 	   <?php   
	 echo $date="Spring-".date("Y",strtotime("-1 year"));
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date("Y",strtotime("-1 year"));
	  ?>"> 	   <?php   
	 echo $date="Fall-".date("Y",strtotime("-1 year"));
	  ?></option>
	   <option value="<?php   
	 echo $date="Spring-".date("Y",strtotime("+1 year"));
	  ?>"> 	   <?php   
	 echo $date="Spring-".date("Y",strtotime("+1 year"));
	  ?></option>
	   <option value=" <?php   
	 echo $date="Fall-".date("Y",strtotime("+1 year"));
	  ?>"> 	   <?php   
	 echo $date="Fall-".date("Y",strtotime("+1 year"));
	  ?></option>
  <?php } ?>
   
   </select> </div>
   <div class="form-group">
           <label for="name">Start Date:</label>
    <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date;?>"  Placeholder="course_code:" >
    </div>
   
    <div class="form-group">
           <label for="name">End Date:</label>
    <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $end_date;?>"  Placeholder="course_code:" >
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
