<?php
require_once "../header.php";
$page='Add Faculty';
   $facid="";
				$alias="";
				 $factable="";
				 $username="";
				$email="";
				$password="";
			 
				$designation=""; 	
				 
if(isset($_GET['id']) && $_GET['id']!=''){
$facid=$_GET["id"];



}
	  
    if($facid>0){
           $query="SELECT * FROM faculty where faculty_id='$facid'   ";
		$result= mysqli_query($link,$query);
		   while( $row=mysqli_fetch_assoc($result)){
			  $facid=$row['faculty_id'];
				$alias=$row['alias'];
				
				 $username=$row['username'];
				$email=$row['email'];
				$password=$row['password'];
				 
				$designation=$row['designation']; 	
				 
	 
    
	 
    
		   }
        }else{
			
			
		   $facid="";
			     
				$alias="";
				 
				 $username="";
				$email="";
				$password="";
 
				$designation=""; 	
				 
            
        }



?>
 

 
    <body>
 
    <div >
   


	<?php
	$msg='';
	if(isset($_POST['submit'])){

	$alias=$_POST['alias'];
    $username=$_POST['username'];
	$email=$_POST['email'];
    $password=$_POST['password'];
	 
    
    $designation=$_POST['designation']; 	
     
    if($facid>0){

    
	
    $query="update faculty set alias='$alias',username='$username',email='$email',password='$password',designation='$designation' where faculty_id='$facid'";
    
 $result= mysqli_query($link, $query);
  alert("faculty update successfuly.");
       
        redirect_to("viewfaculty.php");
 
		   }else{
			     
   
               /*  $q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
                    "INSERT INTO teachers VALUES ('$facno','$name','$alias','$designation','$contact','$email')");
                if ($q) {
                    $sql = "CREATE TABLE " . $facno . " (
                day VARCHAR(10) PRIMARY KEY, 
                period1 VARCHAR(30),
                period2 VARCHAR(30),
                period3 VARCHAR(30),
                period4 VARCHAR(30),
                period5 VARCHAR(30),
                period6 VARCHAR(30)
                )";
                    mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                    $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
                    for ($i = 0; $i < 6; $i++) {
                        $day = $days[$i];
                        $sql = "INSERT into " . $facno . " VALUES('$day','','','','','','')";
                        mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $sql);
                    }
                }
            }
        }
    } */
			   
    $query="INSERT into faculty(username,alias,password,email,designation) VALUES";
    $query.="('$username ','$alias','$password','$email','$designation')";
    $result= mysqli_query($link, $query);
	
	
	
     if( mysqli_insert_id($link)){
		 
	if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE `".$alias."` (
    day VARCHAR(10) PRIMARY KEY, 
                period1 VARCHAR(30),
                period2 VARCHAR(30),
                period3 VARCHAR(30),
                period4 VARCHAR(30),
                period5 VARCHAR(30)                
)";
if(mysqli_query($link, $sql)){
 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
			   $days =array('monday','tuesday','wednesday','thursday','friday');
                    for ($i = 0; $i < 5; $i++) {
                        $day = $days[$i];
						 
                       /*  $sql ="INSERT into ".$factable."`(period1,period2,period3,period4,period5)VALUES('$day','','','','','')";
                         $result= mysqli_query($link,  $sql); */
						 $query="INSERT into `".$alias."`(day,period1,period2,period3,period4,period5) VALUES";
    $query.="('$day','null','null','null','null','null')";
    $result= mysqli_query($link, $query);
                    }   
		
		 
       alert("faculty added successfuly.");
       
        redirect_to("viewfaculty.php");
    }else{
			$msg="faculty already exist";
        
    }
    } 
}
	
?>


  <div class="container">
		<h3 style="color:lightblue"> Add Faculty</h3>
	</div>
	<div class="container" id="form">
	<form action="" method="POST" >
  
 <div class="form-group">
    <label for="name">User Name:</label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>" required="" Placeholder="username:" >
  </div>
  <div class="form-group">
    <label for="name">Alias:</label>
    <input type="text" class="form-control" id="alias" name="alias" value="<?php echo $alias;?>" required="" Placeholder="Kamran as km:" >
  </div>
   
   <div class="form-group">
    <label for="name">e-Mail:</label>
    <input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $email;?>" Placeholder="Enter e-Mail add:">
  </div> 
    <div class="form-group">
    <label for="name">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $password;?>" Placeholder="Enter password:">
  </div>
   
  <div class="form-group">
    <label for="name">Designation:</label>
    <select type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>" required="" >
	<option value=" Professor"> Professor</option>
	<option value="Assistance Professor">Assistance Professor</option>
<option value="Asociate Professor">Asociate Professor</option>
<option value="Lecturar">Lecturar</option>
</select>
	</div>
  
  <input type="submit" class="btn btn-primary" value="Click to Register" name="submit" id="submit"/>
  <input type="reset" class="btn btn-danger" value="Reset" name="reset" id="reset"/>
   <div class="field_error"><?php echo $msg?></div>
</div>
</form>
</div>
<a href="index.php"  style="float:left;color:lightblue ">back</a>

</body>




</html>
