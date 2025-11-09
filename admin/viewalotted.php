<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		
?>	
<div class="main" >
<div class="container-fluid" >
<div class="container" >
        
      <div  >
<a href="alloted.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Allot</a>
	<div>	  
		 

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 <th>course ID</th>
							<th>course Name</th>
							<th>course Code</th>
							 <th>Prer requisite</th>
							<th>semester</th>
							 <th>Faculty</th>
							 
							 
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from program where faculty_id!=0";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['id'];
	           $course_name= $row['title'];
			   $course_code=$row['course_code'];
		        $pre=$row['prerequisit'];
		        $faculty=$row['faculty_id'];
		       $semester=$row['semester'];
		       
		        $i++;
                                    

   ?>
	

                                 <tr>
							         <td><?Php echo $id;?></td>
							       
							       <td><?Php echo $course_name;?></td>
								    <td><?Php echo $course_code;?></td>
							       <td><?Php echo $pre;?></td>
								    
							       <td><?Php echo $semester;?></td>
								   <td><?Php echo $faculty;?></td>
							       
							
				                                  
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