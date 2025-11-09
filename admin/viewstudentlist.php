<?php
require_once "../header.php";
 

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				deletprogram($link,$id);
                     }
?>	
<body>
<div class="main" >


<div class="container-fluid" >
<div class="container" >
 	  
		 <div  >
<a href=" viewprerequisit.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Subject  Prerequisit list</a>
	<div>
	<div  >
<a href="viewexamlist.php" class="btn btn-sm btn-primary" role="button" style="float:right;margin-top:20px;">+ Subject list</a>
	<div>
          <table class="table" id="table">
                    <thead>
					 
                    <thead>
					      <th colspan="3">
						     Student List
					       </th>
					     
					</thead>
					 <thead>
							<tr>
							 
							<th>Student Id</th>
							 <th>Student name</th>
							 <th>Semester</th>
							 
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from student   ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $j=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['student_id'];
	           $username= $row['username'];
			   $semester=$row['semester'];
		
		        $j++;
                                    

   ?>
	

                                 <tr>
							        
							       <td><?Php echo  $id;?></td>
								    <td><?Php echo $username;?></td>
							         <td><?Php echo $semester;?></td>
							       
							
				                    
		                           </tr>
					</tbody>
	<?php
	}
		    
	?>
	</div>
	</div>
	<br>
	<br>

	</div>
</body>
</html>