
<?php
require_once "../header.php";
$page='Add Course';
				 $id="";
	           $course_id="";
			  $faculty_id="";
			  
			  
			  $date="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	 


?>
 <body>
 
     
        <div class="main"> 


<?php
            $msg='';
	  if(isset($_POST['submit'])){
              
			   $course_id=$_POST['course_id'];
			   
			 
			  $faculty_id=$_POST['faculty_id'];
		 
	    
			$query="update program set faculty_id='$faculty_id'  where id='$course_id'";
			$result= mysqli_query($link, $query);
					 alert("course alloted successfuly.");
       
					 redirect_to("viewalotted.php");
 
	 
	}
?>


	 
	<div class="container" id="form">
	<h3 style="color:lightblue"> Add Course Allotement</h3>
	      <form action="" method="POST" >


<div class="row">
 <div class="col-6">

  <div class="form-group">
    <label for="name"> Course:</label>
     <select  class="form-control" type="text" name="course_id" id="course_id"   >
	  
  <option value=" ">Plz Select Course </option>
	  
		   
			 
			  <?php  
			  
		    $query="SELECT * FROM program where faculty_id=0  ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $course_id=$row['id'];
			  
			  
			  
			  
			  ?>
			   
			  <option value='<?php echo $row['id'];  ?>'><?php echo $row['title'] ;  ?></option>
			  
			 
   <?php
		   }
			 ?>
  </select>
  
  
  </div>
</div>





  
 <div class="col-6">
    <div class="form-group">
    <label for="name"> Faculty:</label>
     <select  class="form-control" type="text" name="faculty_id" id="faculty_id"   >
	  <option value=" ">Plz Select Faculty </option>
   
	   
 
			  
			  <?php	

		          $query="SELECT * FROM faculty  ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $fac_id=$row['faculty_id'];
			  $username=$row['useername'];
			  
			  
			  ?>
			   
			  <option value='<?php echo $row['faculty_id'];  ?>'><?php echo $row['username'] ;  ?></option>
			  
			 <?php
		   }
			 ?>
  
  </select>
  
  
  </div>
  </div >
  </div >
  
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
