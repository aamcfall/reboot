<?php
/*
  	$server = "localhost";
	$db_username = "root";
	$db_password = "root";
	$database = "HackU";


	// Create connection
	$conn = mysqli_connect($server, $db_username, $db_password, $database);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
	//print_r($_POST);

*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("include/db.php"); 





	$users_fname = $_POST['first-name'];
	$users_lname = $_POST['last-name'];
	$users_major = $_POST['major'];
  	$users_email = $_POST['email'];
  	$users_username = $_POST['username'];
  	$users_password = $_POST['password'];
  	$users_retypepass = $_POST['retypepass'];

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['first-name']=='' || $_POST['last-name']=='' || $_POST['major']==''|| $_POST['email']==''|| $_POST['username']==''|| $_POST['password']==''|| $_POST['retypepass']=='')
  		{
			Echo "please fill the empty field.";
  		}
  	else {
        $select = "SELECT Email FROM user_hacku WHERE Email='$users_email'";
        //$stmt = $conn->prepare($select);
        //$stmt->bind_param('s', $users_email);
        //$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);
        //$count = $result->num_rows;
        
        $result = mysqli_query($conn,$select);
        
        $count = $result->num_rows;
        
        if( $count > 0) {
          echo $users_email." This email is already being used";
        }
  			elseif ($_POST['password']!='' && $_POST['retypepass']!='' && $_POST['password']==$_POST['retypepass']) {
  				$pass = $_POST['retypepass'];
  				$hashpass = md5($pass);

  			
  		
  		$sql = "INSERT INTO user_hacku (FirstName, LastName, Major, Email, Username, Password) 
  		VALUES (?, ?, ?, ?, ?, ?)";
  		$stmt = $conn->prepare($sql);
  		$stmt->bind_param('ssssss', $users_fname, $users_lname, $users_major, $users_email, $users_username, $hashpass);
  		$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$sql);
  		//echo $sql;
  		//$res=mysqli_query($conn, $sql);
  		//var_dump($res);
  		if($result) {
  			session_start();
  			
  			$sql = "SELECT * FROM user_hacku WHERE (Username='$users_username' or Email='$users_email') and Password='$hashpass'";
  			$result = mysqli_query($conn,$sql);
  			
  			$_SESSION['user'] = $result->fetch_assoc();
         		
         		header("Location: /");
         		exit;
  		}
  		else {
  			Echo "There is some problem in inserting record: " . "<br>" . mysqli_error($conn);
  		}
    }
  	}
  }


?>