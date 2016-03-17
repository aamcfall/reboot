<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dynamic E-Learning Study </title>
	<!--<?php include("include/header.php"); ?>-->
	<meta name="description" content="Handshake App">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
	<style>
	body{
		padding-top: 40px;
	}
	
	.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
	</style>
	<?php


$host = getenv('localhost');
$username = getenv('root');
$pass = getenv('root');
$database = getenv('HackU');

$conn = new mysqli($host, $username, $pass, $database);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
  }
 
?>


<body data-spy="scroll" data-target="#my-navbar">

	<?php include("include/nav.php"); ?>

    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>Thank You for Participating </h1>
  		</div><!-- End container -->
  	</div>



  <div class="container">
    <section>
      <div class="page-header" id="contact">
          
 <p><b>Learn More</b></p> 
 <p> Your learning style was:</p> 
 
"
       <?php
       
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
 $trait = $_SESSION['trait'];
 
 echo $trait;  
 
 
 ?>
"

<br><br>
 <p> learn more about your learning style by clicking on the link.</p>
<a href="http://www.myersbriggs.org/my-mbti-personality-type/mbti-basics/sensing-or-intuition.htm"> Learning Styles</a> 

<br><br>
<p> Your posttest score was:</p> 
"
<?php
$avg = $_SESSION['$avg'] ;
 
 echo $avg;
 ?>
 "
 <br>
<p> Out of 100.</p> 

        
      </div>
      

      <?php
      
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();

?>
</body>




<!-- Footer -->

<footer>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

</footer>
</html>
