<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dynamic E-Learning Study </title>
	<!--<?php include("include/header.php"); ?>-->
	<meta name="description" content="Handshake App">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="../css/custom.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="../stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
	<style>
	body{
		padding-top: 40px;
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

	<?php include("../include/nav.php"); ?>

    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h2>Malware Example: Virus and Worms</h2>
  			

  		</div><!-- End container -->
  	</div>

  	<!-- End jumbotron-->

  	<!--
  	<div class="container text-left">
  			<div class="btn-group">
  				<a href="" class="btn btn-lg btn-warning">Create Event</a>
  			</div>
  	-->

  <!-- Contact -->

  <div class="container">
    <section>
      <div class="page-header" id="contact">
 <h2>Actors</h2><br>
 
 <p> Virus - Unlike worms they require human interaction to begin executing on a machine.</p><br>
        
 <p>Worm - Unlike viruses and trojan horses they do not require any human action to execute and spread. </p><br>
 
 <p> Trojan Horse - Unlike viruses and worms trojans do not reproduce by infecting other files nor do they self replicate. </p><br>
 
 <p> Humans - They are often tricked into downloading/executing viruses and trojan horses, but their interaction are not needed for worms to spread. </p><br>
 <br><br>
 
 <p><b>Directions:</b></p> 
         <p><b>*Warning</b> Video emits sound. You may want to adjust your volume before beginning.   </p> 
         <p><b>Step 1:</b> "Click" on video to begin. </p><br><br>

 <div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/y8a3QoTg4VQ" frameborder="0" allowfullscreen></iframe>
 </div>

            
      </div><!-- End Page Header -->

    <footer>
   <form action="interactive.php" method="post">
    <div align="center"> 
        <div class="form-group" >
           <div class="wrapper">
              <button  type="logout" name="math.php" value="logout" class="btn btn-lg btn-success">Continue</button>
           </div>
        </div>
     </div>
   </form>
   
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
   
    </footer>

</body>
</html>
