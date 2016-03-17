<!DOCTYPE html>
<html lang="en">

<head>
<?php include("include/header.html"); ?>
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
	</style>
	<?php

session_start();
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

	<?php include("include/nav.html"); ?>

    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1> Malware Pretest</h1>

  		</div><!-- End container -->
  	</div>

  <div class="container">
    <section>
      <div class="page-header" id="contact">
          <p>
            Answer each question to the best of your ability. When you are finish answering every questions
             please "click" the submit button at the bottom of the page.
            </p>
      </div><!-- End Page Header -->



<form action="mal_pretest_post.php" method="POST" id="mal_pretest_post">
<div class="form-group">
			<label for="q1" class="col-lg-4 control-label">1. Which of the following is a mechanism a virus uses to conceal itself? </label> 
		<select  name="q1">
		     <option value=""></option>
             <option value="a">a) Cloaking</option>
             <option value="b">b) Compression</option>
               <option value="c">c) Concealing</option>
             <option value="d">d) None of the above</option>
			</select>
		  </div><!-- End form group -->
		  <br><br>

		 <div class="form-group">
			<label for="q2" class="col-lg-4 control-label">2. A single worms can only replicate once. </label>
		<select name="q2">
		     <option value=""></option>
              <option value="a">a) True</option>
             <option value="b">b) False</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

       <div class="form-group">
			<label for="q3" class="col-lg-4 control-label">3. At what phase does a virus become active?</label>
		<select  name="q3">
		<option value=""></option>
             <option value="a">a) Execution Phase </option>
             <option value="b">b) Propagation Phase</option>
               <option value="c">c) Dormant Phase </option>
             <option value="d">d) Triggering Phase</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">4. At what phase does a worm's infection rate peak?</label>
		<select name="q4">
           <option value=""></option>
              <option value="a">a) Slow start phase</option>
             <option value="b">b) Slow finish phase</option>
               <option value="c">c) Rapid spread phase</option>
             <option value="d">d) Fast spread Phase</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q5" class="col-lg-4 control-label"> 5. Which combination of malware requires human interaction to spread? </label>
		<select name="q5">
		     <option value=""></option>
             <option value="a">a) Viruses and Worms </option>
             <option value="b">b) Worms and Trojan horses </option>
             <option value="c">c) Trojan horses and Viruses </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		    <div class="form-group">
			<label for="q6" class="col-lg-4 control-label">6. On average which of the three spreads fastest? </label>
		<select name="q6">
		     <option value=""></option>
             <option value="a">a) Virus</option>
             <option value="b">b) Worm</option>
             <option value="c">c) trojan horse</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q7" class="col-lg-4 control-label">7. Viruses infect other files, however, trojan horses do not.  </label>
		<select name="q7" >
		     <option value=""></option>
             <option value="a">a) True</option>
             <option value="b">b) False</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q8" class="col-lg-4 control-label">8. A virus can execute before the file it is attached to executes. </label>
		<select name="q8">
		     <option value=""></option>
             <option value="a">a) True</option>
             <option value="b">b) False</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q9" class="col-lg-4 control-label">9. What does a worm do after it has found an access mechanism?</label>
		<select name="q9">
		     <option value=""></option>
             <option value="a">a) uses it to establish root privilege on the machine</option>
             <option value="b">b) uses it to overexert the processor</option>
               <option value="c">c) uses it to spread itself to other machines</option>
             <option value="d">d) Uses it to conduct a buffer overflow attack</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		    <div class="form-group">
			<label for="q10" class="col-lg-4 control-label">10. Viruses range in severity.</label>
		<select name="q10">
		     <option value=""></option>
             <option value="a">a) True</option>
             <option value="b">b) False</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>


	 <div class="form-group">
		<div class="col-lg-10 col-lg-offset-2">
		<div style="position:relative;left:250px;top:0px";>
		
		  <button type="submit" name="submit" value="submt" class="btn btn-success">Submit</button>
		</div>
		</div>
	  </div>
	  <br><br><br>

		</form>
	  </div>
	</div><!-- End the row -->


<!-- Footer -->

    <footer>

    </footer>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>



</body>
</html>
