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
	
	$adaptive = 0;
	$interface = 0;
	$content = 0;
	
	
	
   if($q1 == 'SD')
   {
      $adaptive = $adaptive + 20;
   }
    if($q1 == 'D')
   {
      $adaptive = $adaptive + 15;
   }
     if($q1 == 'N')
   {
      $adaptive = $adaptive + 10;
   }
     if($q1 == 'A')
   {
      $adaptive = $adaptive + 5;
   }
     if($q1 == 'SA')
   {
      $adaptive = $adaptive + 0;
   }
   
   
   if($q2 == 'SD')
   {
      $adaptive = $adaptive + 0;
   }
    if($q2 == 'D')
   {
      $adaptive = $adaptive + 5;
   }
     if($q2 == 'N')
   {
      $adaptive = $adaptive + 10;
   }
     if($q2 == 'A')
   {
      $adaptive = $adaptive + 15;
   }
     if($q2 == 'SA')
   {
      $adaptive = $adaptive + 20;
   }
   
      if($q3 == 'SD')
   {
      $interface = $interface + 0;
   }
    if($q3 == 'D')
   {
      $interface = $interface + 25;
   }
     if($q3 == 'N')
   {
      $interface = $interface + 50;
   }
     if($q3 == 'A')
   {
      $interface = $interface + 75;
   }
     if($q3 == 'SA')
   {
      $interface = $interface + 100;
   }

   if($q4 == 'SD')
   {
      $adaptive = $adaptive + 20;
   }
    if($q4 == 'D')
   {
      $adaptive = $adaptive + 15;
   }
     if($q4 == 'N')
   {
      $adaptive = $adaptive + 10;
   }
     if($q4 == 'A')
   {
      $adaptive = $adaptive + 5;
   }
     if($q4 == 'SA')
   {
      $adaptive = $adaptive + 0;
   }


   if($q5 == 'SD')
   {
      $adaptive = $adaptive + 0;
   }
    if($q5 == 'D')
   {
      $adaptive = $adaptive + 5;
   }
     if($q5 == 'N')
   {
      $adaptive = $adaptive + 10;
   }
     if($q5 == 'A')
   {
      $adaptive = $adaptive + 15;
   }
     if($q5 == 'SA')
   {
      $adaptive = $adaptive + 20;
   }
   
   if($q6 == 'SD')
   {
      $adaptive = $adaptive + 0;
   }
    if($q6 == 'D')
   {
      $adaptive = $adaptive + 5;
   }
     if($q6 == 'N')
   {
      $adaptive = $adaptive + 10;
   }
     if($q6 == 'A')
   {
      $adaptive = $adaptive + 15;
   }
     if($q6 == 'SA')
   {
      $adaptive = $adaptive + 20;
   }
   
       if($q7 == 'SD')
   {
      $content = $content + 0;
   }
    if($q7 == 'D')
   {
      $content = $content + 25;
   }
     if($q7 == 'N')
   {
      $content = $content + 50;
   }
     if($q7 == 'A')
   {
      $content = $content + 75;
   }
     if($q7 == 'SA')
   {
      $content = $content + 100;
   }

   
  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['q1']=='' || $_POST['q2']=='' || $_POST['q3']==''|| $_POST['q4']==''|| $_POST['q5']==''|| $_POST['q6']==''|| $_POST['q7']=='')
  		{
		Echo "please fill the empty field.";
  		}
  
  
  else {

  		$sql = "INSERT INTO exit_survey (Username, Adaptive, Interface, Content, q1, q2, q3, q4, q5, q6, q7) 
  		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  		
  		
  		
  		$stmt = $conn->prepare($sql);
  	
  		$stmt->bind_param('sssssssssss', $user, $adaptive, $interface, $content, $q1, $q2, $q3, $q4, $q5, $q6, $q7);
  		
  		$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$sql);  	
  		
  		header("Location: last.php");	
    }
  }
  
  
    		



?>