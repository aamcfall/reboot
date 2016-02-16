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


/*include("include/db.php"); */


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
//         $selct = "SELECT Email FROM user_hacku WHERE Email='$users_email'";
//         $stmt = $conn->prepare($selct);
//         $stmt->bind_param('s', $users_email);
//         $result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$query);
//         //$count = $result->num_rows;
//         
//         $result = mysqli_query($conn,$selct);

  		if ($_POST['password']!='' && $_POST['retypepass']!='' && $_POST['password']==$_POST['retypepass']) {
  				$pass = $_POST['retypepass'];
  				$hashpass = md5($pass);
  		
  		$sql = "INSERT INTO user_hacku (FirstName, LastName, Major, Email, Username, Password) 
  		VALUES (?, ?, ?, ?, ?, ?)";
  		
  		$stmt = $conn->prepare($sql);
  		//var_dump($stmt);
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
         		
         		header("Location: /thesis/consent.php");
         		exit;
  		}
  		else {
  			Echo "There is some problem in inserting record: " . "<br>" . mysqli_error($conn);
  		}
    }
  	}
  }


?>