 
<?php 

     require '../header.php';     
	 $page='Dashboard';
?>
   

<?php
        
        $page="dashboard";
		
	//	$labcount=countlab($link);
	//	$roomcount=countroom($link);
		$coursecount=countcourse($link);
		$facultycount=countfaculty($link);
		$studentcount=countstudent($link);
	//	$coordinatorcount=countcoordinator($link);
	
?>
 
 <div class="main" >
   
 
                
               <div id="status">
                    <div id="faculty" class="info-box status-item">
                        <div class="heading">
                            <h5>Faculty</h5>
                            <div class="info">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </div>
                        <div class="info-content text-primary">
                            <p>Total faculty</p>
                            <p class="num "  >
                                <?php 
                                 echo count($facultycount) ;
								  
								   
                                ?>
                            </p>
                        </div>
                        <a href="./viewfaculty.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div id="student" class="info-box status-item">
                        <div class="heading">
                            <h5>Student</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content text-success">
                            <p>Total Student</p>
                            <p class="num" data-target="<?php 
                                     
                                ?>">
                                <?php 
                                 echo count($studentcount) ;
                                ?>
                            </p>
                        </div>
                        <a href="./viewstudent.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
					
					<div id="faculty" class="info-box status-item">
                        <div class="heading">
                            <h5>Course</h5>
                            <div class="info">
                                <i class="fas fa-bus"></i>
                            </div>
                        </div>
                        <div class="info-content text-success">
                            <p>Total Course</p>
                            <p class="num" data-target="<?php 
                                     
                                ?>">
                                <?php 
                                 echo count($coursecount) ;
                                ?>
                            </p>
                        </div>
                        <a href="./viewcoordinator.php">View More <i class="fas fa-arrow-right"></i></a>
                    </div>
					
					</div>