<?php
//to get js alert
function alert($text){
    echo "<script>alert(\"$text\");</script>";
}
//to go to locaton
function redirect_to($path){
    echo "<script>location=\"$path\";</script>";
}
//confirming right to visit
function confirm_user($user){
    if(strtolower($_SESSION['user_type']) != strtolower("$user")){
        alert("Un-Autherize Access");
        redirect_to("index.php");
    }    
}
//confirming log in
function confirm_logged_in(){
    if(isset($_SESSION['user_type'])){
        return true;
    }else{
        alert("Login Required.");
        redirect_to("login.php");
    }
}
//confirmin nt login
function confirm_not_logged_in(){
    if(isset($_SESSION['user_type'])){
        redirect_to("index.php");
    }
}
//index to user penal
function index_func(){
    if(isset($_SESSION['user_type'])){
        $path=$_SESSION['user_type']."_penal.php";
        redirect_to($path);
    }    
}
function get_safe_value($link,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($link,$str);
	}
}
function countfaculty($link){
	$rtSql = "Select * from faculty";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countstudent($link){
	$rtSql = "Select * from student";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countcoordinator($link){
	$rtSql = "Select * from coordinator";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countcourse($link){
	$rtSql = "Select * from course";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	function countsemester($link){
	$rtSql = "Select * from semester";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}
	
	function deletsemester($link,$id){
	$rtSql = "delete from semester where semester_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("viewsemester.php");} 
	 
	 function deletcoordinator($link,$id){
	$rtSql = "delete from coordinator where co_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
	alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");
     }
	 
	 function deletcourse($link,$id){
	$rtSql = "delete from course where course_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("viewcourse.php");} 
	 
	 function deletroom($link,$id){
	$rtSql = "delete from room where room_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
		
		function deletlab($link,$id){
	$rtSql = "delete from lab where lab_id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("  Delete successfuly.");
       
        redirect_to("dashboard.php");} 
		
		function deletprogram($link,$id){
	$rtSql = "delete from program where id='$id'";
    $resultrtSql = mysqli_query($link, $rtSql);
     
	 alert("Delete course successfuly.");
       
        redirect_to("viewstudy.php");} 
	 
?>