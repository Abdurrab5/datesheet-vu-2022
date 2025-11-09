<?php
require_once "../header.php";
$page='Add Studen';
   $id="";
				$fname="";
				$lname="";
				 $username="";
				$email="";
				$password="";
				 $phone=""; 
				$address=""; 	
				$gender="";
				$semester="";
if(isset($_GET['id']) && $_GET['id']!=''){
$id=$_GET["id"];



}
	  
    if($id>0){
           $query="SELECT * FROM student where student_id='$id'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $id=$row['student_id'];
				$fname=$row['first_name'];
				$lname=$row['last_name'];
				 $username=$row['username'];
				$email=$row['email'];
				$password=$row['password'];
				 $phone=$row['phone']; 
				$address=$row['address']; 	
				$gender=$row['gender'];
	 $semester=$row['semester'];
    
	 
    
		   }
        }else{
			
			     $id="";
				$fname="";
				$lname="";
				 $username="";
				$email="";
				$password="";
				 $phone=""; 
				$address=""; 	
				$gender="";
				$semester='';
            
        }



?>
 

 
    <body>
 
    <div >
     


	<?php
	$msg='';
	if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	$semester=$_POST['semester'];
	  
    $phone=$_POST['phone']; 
    $address=$_POST['address']; 	
    $gender=$_POST['gender'];
    if($id>0){

    
	
    $query="update student set first_name='$fname',last_name='$lname',username='$username',email='$email',password='$password',semester='$semester',address='$address',gender='$gender',phone='$phone' where  student_id='$id'";
    
 $result= mysqli_query($link, $query);
  alert("student update successfuly.");
       
        redirect_to("viewstudent.php");
 
		   }else{
    $query="INSERT into student(username,first_name,last_name,password,email,semester,gender,address,phone) VALUES";
    $query.="('$username ','$fname','$lname','$password','$email','$semester','$gender','$address','$phone')";
    $result= mysqli_query($link, $query);
    if( mysqli_insert_id($link)){
		
		
       alert("student successfuly.");
       
        redirect_to("dashboard.php");
    }else{
			$msg="student already exist";
        
    }
}
	}
?>


  <div class="container">
		<h3 style="color:lightblue"> Add student</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
 <div class="row">
 <div class="col-4">
 <div class="form-group">
    <label for="name">User Name:</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>" required="" Placeholder="username:" >
  </div> </div><div class="col-4">
  <div class="form-group">
    <label for="name">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $fname;?>" required="" Placeholder="username:" >
  </div></div><div class="col-4">
  <div class="form-group">
    <label for="name">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lname;?>"required="" Placeholder="username:" >
  </div></div></div><div class="row">
   <div class="col-4">
   <div class="form-group">
    <label for="name">e-Mail:</label>
    <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email;?>" Placeholder="Enter e-Mail add:">
  </div> </div><div class="col-4">
    <div class="form-group">
    <label for="name">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password;?>" Placeholder="Enter password:">
  </div></div><div class="col-4">
   <div class="form-group">
    <label for="name">Semester:</label>
    <select class="form-control" id="semester" name="semester" required=""   >
	<option value=" ">Plz Select Semester</option>
	<option value="semester1">Semester1</option>
	<option value="semester2">Semester2</option>
	<option value="semester3">Semester3</option>
	<option value="semester4">Semester4</option>
	<option value="semester5">Semester5</option>
	<option value="semester6">Semester6</option>
	<option value="semester7">Semester7</option>
	<option value="semester8">Semester8</option>
	
	
	</select>
  </div></div></div><div class="row"> <div class="col-4">
  <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" required="" value="<?php echo $phone;?>" Placeholder="03001234567:" >
  </div></div><div class="col-4">
  <div class="form-group">
    <label for="name">address:</label>
    <input type="text" class="form-control" id="address" name="address" required="" value="<?php echo $address;?>" Placeholder="03001234567:" >
 
	</div></div><div class="col-4">
  <div class="form-group">
    <label for="gender">Gender:</label>
    <div class="form-check">
      <?php if($id>0){
		  if($gender=='male'){
			  echo ' <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
     <br>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female';
		  }else{
			   echo ' <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" >Male
     <br>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" checked>Female';
		  }
		  
	  }else{?>
        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
     <br>
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
	  <?php }?>
    </div>
  </div></div></div>
  <input type="submit" class="btn btn-primary" value="Click to Register" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
 

</body>




</html>
