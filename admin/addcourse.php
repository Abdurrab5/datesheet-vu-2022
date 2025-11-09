<?php
require_once "../header.php";
				$id="";
				$course_name="";
				 
				$enrolment="";
				  $course_code="";
				   
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id>0){
        $query="SELECT * FROM course where course_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['course_id'];
			  $course_name=$row['course_name'];
			  
			  $course_code=$row['course_code'];
			  
			   
					}
        }else{
			$id="";
			$course_name="";
			$course_code="";
			 
            }


?>
 <body>
 
     <div >
         </div>



<?php
            $msg='';
	  if(isset($_POST['submit'])){
             $course_name=$_POST['course_name'];
			 $course_code=$_POST['course_code'];
			  
	          
      
      if($id>0){
			$query="update course set course_name='$course_name',course_code='$course_code' where course_id='$id'";
			$result= mysqli_query($link, $query);
					alert("course update successfuly.");
       
					redirect_to("viewcourse.php");
 
	 }else{
			$query="INSERT into course(course_name,course_code  ) VALUES";
			$query.="('$course_name','$course_code')";
			$result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
				alert("course successfuly.");
       
				redirect_to("viewcourse.php");
    }else{
				$msg="course already exist";
        
    }
}
	}
?>


	<div class="container">
			<h3 style="color:lightblue"> Add course</h3>
	</div>
	<div class="container" id="form">
	      <form action="" method="POST" >
 
 
 <div class="form-group">
           <label for="name">Course code:</label>
    <input type="text" class="form-control" id="course_code" name="course_code" value="<?php echo $course_code;?>"  Placeholder="course_code:" >
    </div>
    <div class="form-group">
           <label for="name">Course Name:</label>
    <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $course_name;?>"  Placeholder="course_name:" >
    </div>
	
   
   
  <div>
   <div class="form-group">
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>




</html>
