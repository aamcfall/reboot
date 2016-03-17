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
  			<h1> Exit Survey</h1>

  		</div><!-- End container -->
  	</div>



  <div class="container">
    <section>
      <div class="page-header" id="contact">
          <p>
            Please answer each question as truthfully as possible and to the best of your ability. 
            When you are finished selecting answers to each question "click" the submit button 
            at the bottom of the page.
          </p>
      </div><!-- End Page Header -->



<form action="exit_post.php" method="POST" id="exit_post">

<div class="form-group">
			<label for="q1" class="col-lg-4 control-label">1. I felt that the curriculum was good overall, but not tailored specifically to me.</label> 
		<select  name="q1">
		     <option value=""></option>
             <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>


<div class="form-group">
			<label for="q2" class="col-lg-4 control-label">2. The sequence in which the curriculum was dispensed made the information easier to digest.</label> 
		<select  name="q2">
		     <option value=""></option>
              <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>
		  
		  <div class="form-group">
			<label for="q3" class="col-lg-4 control-label">3. The E-Learning application was user friendly.</label> 
		<select  name="q3">
		     <option value=""></option>
             <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>
		  
		  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">4. The Curriculum felt as if it was tailored for a learning style different than my own.</label> 
		<select  name="q4">
		     <option value=""></option>
             <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>
		  
		  <div class="form-group">
			<label for="q5" class="col-lg-4 control-label">5. I found the learning experience to be an enjoyable one.  </label> 
		<select  name="q5">
		     <option value=""></option>
               <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>
		  
		    <div class="form-group">
			<label for="q6" class="col-lg-4 control-label">6. I feel confident that I scored significantly higher on the malware posttest than on the malware pretest.</label> 
		<select  name="q6">
		     <option value=""></option>
               <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
             </select>
		  </div><!-- End form group -->
		  <br><br>
		  
		    <div class="form-group">
			<label for="q7" class="col-lg-4 control-label">7. The learning content was clear and easy to understand. </label> 
		<select  name="q7">
		     <option value=""></option>
               <option value="SD">a) Strongly disagree</option>
             <option value="D">b) Disagree</option>
             <option value="N">c) Neither agree nor disagree</option>
             <option value="A">d) Agree</option>
             <option value="SA">e) Strongly agree</option>
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
