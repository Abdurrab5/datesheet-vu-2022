<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				 
                     }
?>	
<div class="main" >
<div class="container-fluid" >
<div class="container" >
        
      <div  >
<a href="addexamtype.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Add Examtype</a>
	<div>	  
		 

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>Exam Type</th>
							<th>Start date</th>
							 <th>End Date</th>
							<th>Status</th>
							 
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from exam_type";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['type_id'];
	           $start_date= $row['start_date'];
			   $end_date=$row['end_date'];
		        $status=$row['status'];
		        $i++;
                                    

   ?>
	

                                 <tr>
							        <td><?Php echo $id;?></td>
							       <td><?Php echo $start_date;?></td>
								    <td><?Php echo $end_date;?></td>
							        <td><?Php echo $status;?></td>
							       
							
				                   <td>
				<a href="addexamtype.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewexamtype.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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