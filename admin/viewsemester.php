<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletsemester($link,$id);
                     }
?>	
<div class="main" >

<div class="container-fluid" >
<div class="container" >
 <div  >
<a href="addsemester.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Add Semester</a>
	<div>	  
		
         <h4 class="text-white">
         <a href="addsemester.php">Add semester</a>
		 </h4>

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>semester Name</th>
							 
							 
							 
							 
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from semester";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['semester_id'];
	           $semester_name= $row['semester_name'];
			   
		       
		        $i++;
                                    

   ?>
	

                                 <tr>
							        
							       <td><?Php echo $semester_name;?></td>
								    
							       
							       
							
				                 
				                    <td>
				<a href="viewsemester.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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