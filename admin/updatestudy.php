<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletcourse($link,$id);
                     }
?>	
<body>
<div class="main">
         

<div class="container-fluid" >
<div class="container" >
  
		
           <table class="table" id="table">
		   <?php
		   for($i=1;$i<9;$i++){
			   
			   $sem="Semester".$i;
		   ?>
                    <thead>
					      <th colspan="5">
						    <?php echo $sem;
?>							
					       </th>
					</thead>
					 <thead>
							<tr>
							 
							<th>course Code</th>
							 <th>Title</th>
							 <th>Prerequisite</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from program where semester='$sem' ";
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
							       
							
				                   <td>
				<a href="addstudy.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewstudy.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
				                   </td>
		                           </tr>
					</tbody>
	<?php
	}
		   }
	?>
	</div>
	</div>
	<br>
	<br>
	
</body>
</html>