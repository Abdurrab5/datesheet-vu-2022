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
<a href="addtimeslots.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Add Timeslos</a>
	<div>	  
		 

          <table class="table" id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							 
							<th>TimeSlot Id</th>
							<th>Start time</th>
							 <th>End end</th>
							<th>Type</th>
							 
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from timeslot";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['timeslot_id'];
	           $start_time= $row['start_time'];
			   $end_time=$row['end_time'];
		        $type=$row['type'];
		        $i++;
                                    

   ?>
	

                                 <tr>
							        <td><?Php echo $id;?></td>
							       <td><?Php echo $start_time;?></td>
								    <td><?Php echo $end_time;?></td>
							        <td><?Php echo $type;?></td>
							       
							
				                   <td>
				<a href="addtimeslots.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewtimeslots.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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