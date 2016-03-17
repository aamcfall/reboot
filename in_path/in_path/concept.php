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
  			<h1>CONCEPT</h1>
  		</div><!-- End container -->
  	</div>



  <div class="container">
    <section>
      <div class="page-header" id="contact">
          
 <p><b>Learning objective</b></p> 
 <p> By the end of this lesson you should be able to describe the basic operations of viruses and worms. </p> 
 <p><b>Malicious software</b>, or <b>malware</b>, are one of the most significant threats to computer systems. </p><br>
 
 <p><b>Virus</b></p> 
 <p> Malware, that when executed, tries  to replicate itself into other executable machine or script code; when it succeeds, the code is said to be infected. When the infected code is executed, the virus also executes. </p><br>
 <p> <b>Four phases of a virus</b> </p>
 <p><b>(1) Dormant phase:</b> The virus is idle. The virus will eventually be activated by some event, such as a date, the presence of another program or file, or the capacity of the disk exceeding some limit. Not all viruses have this stage. </p> 
 <p><b>(2) Propagation phase:</b> The virus places a copy of itself into other programs or into certain system areas on a the disk. The copy may not be identical to the propagating version; viruses often morph to evade detection. Each infected program will now contain a clone of the virus, which will itself enter a propagation phase.</p> 
 <p><b>(3) Triggering phase:</b> The virus is activated to perform the function for which it was intended. As with the dormant phase, the triggering phase can be caused by a variety of system events, including a count of the number of times that this copy of the virus has made copies of itself.  </p> 
 <p><b>(4) Execution phase:</b> The function is performed. The function may be harmless, such as a message on the screen, or damaging, such as the destruction of programs and data files. </p><br>
 
 <p><b>Worm</b></p> 
 <p>A computer program that can run independently and can propagate a complete working version of itself onto other hosts on a network, usually by exploiting software vulnerabilities in the target system. </p> 
 <p><b>A worm typical uses the same phase as a computer virus. (1) Dormant, (2) Propagation, (3) Triggering, and  (4) Execution. </b></p><br>
 <p><b>(2) Propagation phase</b> performs the following functions. </p> 
 <p> <b>•</b> Search for access mechanism, used to to spread to other systems </p> 
 <p> <b>•</b> Use the found access mechanism to spread copies of itself to other machines </p> 
        
      </div>
</body>




<!-- Footer -->

<footer>
   <form action="math.php" method="post">
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
</html>
