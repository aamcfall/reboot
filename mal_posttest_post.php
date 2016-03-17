<?php
//NEW

$host = localhost;
$username = root;
$pass = root;
$database = HackU;

$conn = mysqli_connect($host, $username, $pass, $database);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
  }
 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    session_start();
 
    $user = $_SESSION['user'];
    

	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];
	$q10 = $_POST['q10'];
	
	$avg = 0;
	

	   if($q1 == "b")
	   {
	      $q1 = "R";
	      
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q1 = "W";
	   }
	
	  if($q2 == "b")
	   {
	      $q2 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q2 = "W";
	   }

      if($q3 == "d")
	   {
	      $q3 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q3 = "W";
	   }
	   
	   if($q4 == "d")
	   {
	      $q4 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q4 = "W";
	   }
	   
	   if($q5 == "c")
	   {
	      $q5 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q5 = "W";
	   }
	   
	   if($q6 == "b")
	   {
	      $q6 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q6 = "W";
	   }
	   
	   if($q7 == "a")
	   {
	      $q7 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q7 = "W";
	   }
	   
	   if($q8 == "b")
	   {
	      $q8 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q8 = "W";
	   }
	   
	   if($q9 == "c")
	   {
	      $q9 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q9 = "W";
	   }
	   
	   if($q10 == "a")
	   {
	      $q10 = "R";
	      $avg = $avg +10;
	   }
	   else
	   {
	      $q10 = "W";
	   }
	
    echo $user;
   

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['q1']=='' || $_POST['q2']=='' || $_POST['q3']==''|| $_POST['q4']==''|| $_POST['q5']==''|| $_POST['q6']==''|| $_POST['q7']==''|| $_POST['q8']=='' || $_POST['q9']=='' || $_POST['q10']=='')
  		{
		Echo "please fill the empty field.";
  		}
  
  
  else {

  		$sql = "INSERT INTO mal_posttest (avg, Username, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) 
  		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  		
  		
  		
  		$stmt = $conn->prepare($sql);
  	
  		$stmt->bind_param('isssssssssss', $avg, $user, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);

          		$_SESSION['$avg'] = $avg;
  		
  		$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$sql);  	
  		
  		header("Location: exit_survey.php");	
    }
  }
  
  
    		



?>