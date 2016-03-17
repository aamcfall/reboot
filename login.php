<?php

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



//allows code to connect to database 
/*include("include/db.php");*/ 

    //Begins a session 
	session_start();
	
	//Variables enerted by user 
	$users = $_POST['user'];
  	$users_password = $_POST['password'];
 
 	//Checks to see if variables are empty 
  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['user']=='' || $_POST['password']=='' ){
			echo "Username or password is empty.";
  		}
  	else { 
  	  
  		if($_POST['password']!='' && $_POST['user']!=''){
  			$pass = $_POST['password'];
  			$hashpass = md5($pass);
  			$users = $_POST['user'];
            
            
            //Checks against the database 
  			$sql = "SELECT * FROM user_hacku WHERE (Username='$users') AND Password='$hashpass'";
  			
  			$result = mysqli_query($conn, $sql);
  			
  		 $num_rows = mysqli_num_rows($result);

         echo $num_rows ;
  			
  			if ($num_rows ==1) {
      		
         		//session_register("users");
         		$_SESSION['user'] = $result->fetch_assoc();
         		
         		$_SESSION['user'] = $_POST['user'];
         		
         		
         		
         		header("Location: consent.php");
         		exit;
         	
  			}
  		else{
  			echo "You login name or password is invalid";
  		}
  	  	}
  	}
  	
  }
?>