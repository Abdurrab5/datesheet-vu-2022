<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletcourse($link,$id);
                     }
?>	
<div class="main" >
<div class="container-fluid" >
<div class="container" >
        
      <div  >
<a href="addcourse.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Add course</a>
	<div>	  
		 

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>course Name</th>
							<th>course Code</th>
							 
							 
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from course";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['course_id'];
	           $course_name= $row['course_name'];
			   $course_code=$row['course_code'];
		       
		        $i++;
                                    

   ?>
	

                                 <tr>
							        
							       <td><?Php echo $course_name;?></td>
								    <td><?Php echo $course_code;?></td>
							       
							       
							
				                   <td>
				<a href="addcourse.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewcourse.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
				                   </td>
		                           </tr>
					</tbody>
	<?php
	}
	?>
	</div>
	</div>
	</div>
</body>
</html>