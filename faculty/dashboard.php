 
<?php require '../header.php';     ?>
   

    <?php
        
		 $fac=$_SESSION['faculty_id'];
		 
       
    ?>
<div class="main">
     
 
            
<div class="container-fluid" >
<div class="container" >
  
		
           <table class="table" id="table">
		         <thead>
					      <th colspan="3">
						    
					       </th>
					</thead>
					 <thead>
							<tr>
							 
							<th>course Code</th>
							 <th>Title</th>
							 <th>Prerequisite</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from program where faculty_id='$fac' ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $j=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['id'];
	           $course_name= $row['title'];
			   $course_code=$row['course_code'];
			   
		       $pre=$row['prerequisit'];
			   if($pre=='no'){
			   $pre="";
			   }else{
			   $pre=$row['prerequisit'];
			   }
		
		        $j++;
                                    

   ?>
	

                                 <tr>
							        
							       <td><?Php echo $course_name;?></td>
								    <td><?Php echo $course_code;?></td>
							         <td><?Php echo $pre;?></td>
							       
							
				                 
		                           </tr>
					</tbody>
	<?php
	}

	?>
	</div>
	</div>
	<br>
	<br>
	
</body>
</html>