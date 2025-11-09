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
<a href="viewstudentlist.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ student List</a>
	<div>	  
		 <div  >
<a href=" viewprerequisit.php" class="btn btn-sm btn-primary" role="button" style="float:right;margin-top:20px;">+ Subject  Prerequisit list</a>
	<div>
           <table class="table" id="table">
                    <thead>
					 <?php
		    
		   ?>
                    <thead>
					      <th colspan="4">
						     <h3>Subject list </h3>
					       </th>
					     
					</thead>
					 <thead>
							<tr>
							 
							<th>course Code</th>
							 <th>Title</th>
							 <th>Prerequisite</th>
							 <th> Semester</th>
							 
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from program  ";
             $resultBusSql = mysqli_query($link, $busSql);
                       $j=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['id'];
	           $course_name= $row['title'];
			   $course_code=$row['course_code'];
			   $semester=$row['semester'];
			   
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