<?php
require_once "../header.php";
			$title="";  	$id="";
				$semester_name="";
				  $semester="";
				$enrolment="";
				  $course_code="";
				   $prerequisit="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

}
	   if($id>0){
        $query="SELECT * FROM program where id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['id'];
			  $title=$row['title'];
			   $semester_name=$row['semester'];
			  $course_code=$row['course_code'];
			  $prerequisit=$row['prerequisit'];
			   
					}
        }else{
			$id="";
			$title="";
			$course_code="";
			 $prerequisit="";
            }

 
?>
 <body>
 
     <div >
         </div>


<?php
            $msg='';
	  if(isset($_POST['submit'])){
              $semester=$_POST['semester_name'];
	           $prerequisit=$_POST['prerequisit'];
			 $course_code=$_POST['course_code'];
			  
			 $busSql = "Select * from course where course_code='$course_code' ";
             $resultBusSql = mysqli_query($link, $busSql);
                      
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       
	           $title= $row['course_name'];
			   
		       
		         
                    }     
				   
     
      if($id>0){ 
		 $query="update program set course_code='$course_code',title='$title',prerequisit='$prerequisit',semester='$semester' where id='$id'";
			$result= mysqli_query($link, $query);
					alert("course update successfuly.");
       
					redirect_to("viewstudy.php");
 
	 }else{  
			$query="INSERT into program(course_code,title,prerequisit,semester) VALUES";
			$query.="('$course_code','$title','$prerequisit','$semester')";
			$result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
				 alert("course successfuly.");
       
			 	 redirect_to("viewstudy.php");
    }else{
				$msg="course already exist";
        
    }
}
	 }
?>


	<div class="container">
			<h3 style="color:lightblue"> Add Study Program</h3>
	</div>
	<div class="container" id="form">
	      <form action="" method="POST" >
  
   
	<div class="form-group">
           <label for="name">Course code:</label>
    <select type="text" class="form-control" id="course_code" name="course_code" value="<?php $course_code; ?>" Placeholder=" ">
     
   <?php	
   if($id>0){ 
   
   ?> <option value="<?php echo $course_code;?>" selected> <?php echo $course_code; ?></option>
  <?php  
      
   $cou ="Select * from course";
             $resultcou = mysqli_query($link, $cou);
                        
    while($row = mysqli_fetch_assoc($resultcou)){
		      
	         
			$course_code= $row['course_code'];
			?> <option value="<?php echo $course_code;?>" > <?php echo $course_code; ?></option>
  <?php
	}
   }else{
	    $cou ="Select * from course";
             $resultcou = mysqli_query($link, $cou);
                        
    while($row = mysqli_fetch_assoc($resultcou)){
		      
	         
			$course_code= $row['course_code'];
		       
		         
                                    

   ?>
   
   <option value="<?php echo $course_code;?>" selected> <?php echo $course_code; ?></option>
  
   <?php }
   } ?>
  

            
   
   </select>
   
	</div>
    <div class="form-group">
           <label for="name">Semester Name:</label>
    <select type="text" class="form-control" id="semester_name" name="semester_name" required="">
   
   <?php
if($id>0){ 
   
   ?> <option value="<?php echo $semester_name;?>" selected> <?php echo $semester_name; ?></option>
  <?php  
      
    $sem ="Select * from semester";
             $resultsem = mysqli_query($link, $sem);
                      
    while($row = mysqli_fetch_assoc($resultsem)){
		      
	           $semester_name= $row['semester_name'];
			?> <option value="<?php echo $semester_name;?>" > <?php echo $semester_name; ?></option>
  <?php
	}
   }else{   

             $sem ="Select * from semester";
             $resultsem = mysqli_query($link, $sem);
                      
    while($row = mysqli_fetch_assoc($resultsem)){
		      
	           $semester_name= $row['semester_name'];
			   
		       
		        
                                    

   ?>
   
   <option value="<?php echo $semester_name;?>" selected> <?php echo $semester_name;?></option>
  
   <?php }
   }?>
   
   </select>
   
  <div>
  <div class="form-group">
           <label for="name"> prerequisit: </label>
		   <select  class="form-control" type="multimedia" name="prerequisit" id="prerequisit" required="">
      
<?php 
if($id>0){ 
   
   ?> <option value="<?php echo $prerequisit;?>" selected> <?php echo $prerequisit; ?></option>
   <option value="no"> No</option>
  <?php  
      
    $pre ="Select * from course";
             $resultpre = mysqli_query($link, $pre);
                      
    while($row = mysqli_fetch_assoc($resultpre)){
		        
	           $prerequisit= $row['course_code'];
			?> <option value="<?php echo $prerequisit;?>" > <?php echo $prerequisit; ?></option>
  <?php
	}
   }else{   

 ?>

	  <option value="no"> No</option>
   <?php	

             $pre ="Select * from course";
             $resultpre = mysqli_query($link, $pre);
                      
    while($row = mysqli_fetch_assoc($resultpre)){
		        
	           $prerequisit= $row['course_code'];
			   
		       
		        
                                    

   ?>
   
   <option value="<?php echo $prerequisit;?>"> <?php echo $prerequisit;?></option>
  
   <?php }}?>
   
   </select>
  
	</div>
   <div class="form-group">
  <input type="submit" class="btn btn-success" value="Save" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>




</html>
