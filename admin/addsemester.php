<?php
require_once "../header.php";
				$id="";
				$semester_name="";
				 
				 
				  
				   
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id>0){
        $query="SELECT * FROM semester where semester_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['semester_id'];
			  $semester_name=$row['semester_name'];
			  
			   
			  
			   
					}
        }else{
			$id="";
			$course_name="";
			$course_code="";
			 
            }


?>
 <body>
 
      


<?php
            $msg='';
	  if(isset($_POST['submit'])){
             $semester_name=$_POST['semester_name'];
			  
			  
	          
      
      if($id>0){
			$query="update semester set semester_name='$semester_name' where semester_id='$id'";
			$result= mysqli_query($link, $query);
					alert("semester update successfuly.");
       
					redirect_to("viewsemester.php");
 
	 }else{
			$query="INSERT into semester(semester_name) VALUES";
			$query.="('$semester_name')";
			$result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
				alert("semester add successfuly.");
       
				redirect_to("viewsemester.php");
    }else{
				$msg="semester already exist";
        
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
           <label for="name">Semester Name:</label>
    <select type="text" class="form-control" id="semester_name" name="semester_name" value="<?php echo $semester_name;?>" required="" Placeholder="Semester Name:" >
  <?php  if($id>0){
	  
	  ?>
	  <option value="<?php echo $semester_name;?>"> <?php echo $semester_name;?></option>
	  <option value="Semester1"> Semester1</option>
   <option value="Semester2"> Semester2</option>
   <option value="Semester3"> Semester3</option>
   <option value="Semester4"> Semester4</option>
   <option value="Semester5"> Semester5</option>
   <option value="Semester6"> Semester6</option>
   <option value="Semester7"> Semester7</option>
   <option value="Semester8"> Semester8</option>
	  <?php
	  
  }else{
?>
  <option value="Semester1"> Semester1</option>
   <option value="Semester2"> Semester2</option>
   <option value="Semester3"> Semester3</option>
   <option value="Semester4"> Semester4</option>
   <option value="Semester5"> Semester5</option>
   <option value="Semester6"> Semester6</option>
   <option value="Semester7"> Semester7</option>
   <option value="Semester8"> Semester8</option>
  <?php } ?>
   
   </select>
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
