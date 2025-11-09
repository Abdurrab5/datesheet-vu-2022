<?php
require_once "../header.php";
 $page='View Student';

?>
 

 <?php
       
		 
		if(isset($_GET['id']) && $_GET['id']!=''){
				$id=$_GET["id"];

				 
    $query="delete FROM student WHERE student_id='$id' ";
    $result= mysqli_query($link, $query);
alert('deleted');
                     }
?>	

<div class="main" >

<div class="container" >
        <div  >
<a href="addstudent.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+Add Student</a>
	<div>	  

          <table class="table " id="table">
                    <thead>
					       <tr>
					       </tr>
					</thead>
					 <thead>
							<tr>
							
							<th>Student Id</th>
							 
							<th>Username</th>
							<th>Semester</th>
							<th>Email</th>
							<th>Password</th>
							<th>Designation</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>Update</th>
							<th>Delete</th>
							 </tr>
					</thead>
					<tbody>
<?php	

             $busSql = "Select * from student";
             $resultBusSql = mysqli_query($link, $busSql);
                       $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		       $id=$row['student_id'];
	           $first_name= $row['first_name'];
		       $last_name=$row['last_name']; 
		       $username=$row['username'];
			    $semester=$row['semester'];
		       $email=$row['email']; 
		       $password=$row['password'];
		       $designation=$row['address']; 
		       $gender=$row['gender'];
		       $phone=$row['phone'];
                     $i++;               

   ?>
	

                                 <tr>
							        
							       <td><?Php echo $id; ?></td>
							      <td><?Php echo $username;?></td>
								  <td><?Php echo  $semester;?></td>
							       <td><?Php echo $email;?></td>
							       <td><?Php echo $password ;?></td>
							       <td><?Php echo $designation;?></td>
							       <td><?Php echo  $gender;?></td>
							       <td><?Php echo $phone;?></td>
							
				                   <td>
				<a href="addstudent.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a>
				                   </td>
				                    <td>
				<a href="viewstudent.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a>
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