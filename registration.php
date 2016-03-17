<?php
//NEW
//Begins a session 
	session_start();
	
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


/*include("include/db.php"); */


	$users_fname = $_POST['first-name'];
	$age = $_POST['age'];
	$users_major = $_POST['major'];
	$Class = $_POST['Class'];
  	$users_email = $_POST['email'];
  	$users_username = $_POST['username'];
  	$users_sex = $_POST['sex'];
  	$users_password = $_POST['password'];
  	$users_retypepass = $_POST['retypepass'];

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['first-name']=='' || $_POST['age']==''|| $_POST['major']=='' || $_POST['Class']==''|| $_POST['email']==''|| $_POST['username']==''||$_POST['sex']==''|| $_POST['password']==''|| $_POST['retypepass']=='')
  		{
			Echo "please fill the empty field.";
  		}
  	else {

         
            
	
	  //Checks against the database 
  			$sql = "SELECT * FROM user_hacku WHERE (Username='$users_username') ";
  			
  			$result = mysqli_query($conn, $sql);
  			
  		 $num_rows = mysqli_num_rows($result);

         echo $num_rows ;
  			
  			if ($num_rows ==0) {
      		
         		
  		if ($_POST['password']!='' && $_POST['retypepass']!='' && $_POST['password']==$_POST['retypepass']) {
  				$pass = $_POST['retypepass'];
  				$hashpass = md5($pass);
  				$users_email = md5($users_email);
  		
  		$sql = "INSERT INTO user_hacku (FirstName, age, Major, Class, Email, Username, sex, Password) 
  		VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  		
  		$stmt = $conn->prepare($sql);
  		//var_dump($stmt);
  		$stmt->bind_param('ssssssss', $users_fname, $age, $users_major, $Class, $users_email, $users_username, $users_sex, $hashpass);
  		$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$sql);
  		
  		
  		
  		
  		
  		
  		
  		
  		if($result) {
  			
  			
  			$sql = "SELECT * FROM user_hacku WHERE (Username='$users_username' or Email='$users_email') and Password='$hashpass'";
  			$result = mysqli_query($conn,$sql);
  			
  			
  			
  	
         		
         		header("Location: /thesis/third.php");
         		exit;
  		}
  		
  		
  		else {
  			Echo "There is some problem in inserting record: " . "<br>" . mysqli_error($conn);
  		}
  	}
  }
    
    		else{
  			echo "Username is already in use";
  		}
  		
    
  	}
  }


?>