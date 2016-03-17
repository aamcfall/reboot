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
  			<h1>Interactive Simulation</h1>
  		</div><!-- End container -->
  	</div>
  <div class="container">
    <section>
      <div class="page-header" id="contact">
        
         <H2><b>VIRUS</b></H2><br><br>
         <p><b>Directions:</b></p> 
         <p><b>*Warning</b> Simulation emits sound. You may want to adjust your volume before beginning.   </p> 
         <p><b>Step 1:</b> "Scroll down slowly" in frame till you see a green flag inside a white circle. </p> 
         <p><b>Step 2:</b> "Click" on green flag. </p> 
         <p><b>Step 3:</b> "Click" on Windows icon. </p> 
         <p><b>Step 5:</b> "Read" warning. </p>
         <p><b>Step 6:</b> "Click" on warning. </p>
         <p><b>Step 7:</b> Wait. </p><br><br>
         <br><br>
         <div>
            <iframe width="560" height="315" src="https://scratch.mit.edu/projects/26292847/" frameborder="0" allowfullscreen></iframe>
         </div>
         <br><br>
         <H2><b>Worm</b></H2>  
         <p><b>Directions:</b></p> 
         <p><b>Step 1:</b> Do nothing worms spread without any human interaction. </p> 
      </div>
</body>




<!-- Footer -->
<br><br>
<footer>
   <form action="concept.php" method="post">
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
