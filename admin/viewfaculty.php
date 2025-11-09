<?php
require_once "../header.php";
 $page='View Faculty';
$alias="";
?>
 

  <?php
       
		 
    if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];

$busSql = "Select * from faculty where faculty_id='$id'";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
     $id=$row['faculty_id'];
	$alias= $row['alias'];
	}
	deletfaculty($link,$id);
$query = "DROP TABLE `".$alias."`";

if(mysqli_query($link, $query)){
 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}


     
			  
	

?>	
<div class="main">

<div class="container" >
 <div  >
<a href="addfaculty.php" class="btn btn-sm btn-success" role="button" style="float:right;margin-top:20px;">+ Add faculty</a>
	<div>	  
		
 


<table class="table" id="table">
<thead>
								<tr>
									
									
									
								</tr>
							</thead>
						 <thead>
							<tr>
							<th class="serial">s.no</th>
							<th>Faculty Id</th>
							
							<th>Username</th>
							<th>alias</th>
							 
							<th>Email</th>
							<th>Password</th>
							<th>Designation</th>
							 
							<th>Update</th>
							<th>Delete</th>
							 </tr>
						</thead>
												

						<tbody>
<?php	


 $busSql = "Select * from faculty";
    $resultBusSql = mysqli_query($link, $busSql);
    $i=1;
    while($row = mysqli_fetch_assoc($resultBusSql)){
		
		
		
     $id=$row['faculty_id'];
	$alias= $row['alias'];
		 
		$username=$row['username'];
		$email=$row['email']; 
		$password=$row['password'];
		$designation=$row['designation']; 
		 
                                    

   ?>
	

<tr>
							<td class="serial"><?php echo $i++; ?></td>
							<td><?Php echo $id; ?></td>	 
							 
							
							<td><?Php echo $username;?></td>
							<td><?Php echo $alias ;?></td>
							<td><?Php echo $email;?></td>
							<td><?Php echo $password ;?></td>
							<td><?Php echo $designation;?></td>
							 
							
				<td><a href="addfaculty.php?id=<?php echo $id;?>" class="btn btn-sm btn-primary" role="button">Edit</a></td>
				<td><a href="viewfaculty.php?id=<?php echo $id;?>" class="btn btn-sm btn-danger" role="button">Delete</a></td>
		 
							 
	
	</tr>
		
						 </tbody>
	<?php
	}
	?>
	</div></div></div>
</body>
</html>