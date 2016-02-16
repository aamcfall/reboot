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
  			<h1> Questionair</h1>

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
          <p>
            For each of the 11 questions below select either "a" or "b" to indicate your answer.
            Please choose only one answer for each question. If both "a" and "b" seem to apply to you,
            choose the one that applies more frequently. When you are finished selecting answers 
            to each question please select the submit button at the end of the form.
            </p>
      </div><!-- End Page Header -->


<div class="form-group">
			<label for="q1" class="col-lg-4 control-label">1. I would rather be considered</label> 
		<select>
		     <option value=""></option>
             <option value="a">a) realistic</option>
             <option value="b">b) innovative</option>
			</select>
		  </div><!-- End form group -->
		  <br><br>

		 <div class="form-group">
			<label for="q2" class="col-lg-4 control-label">2. If I were a teacher, I would rather teach a course</label>
		<select>
		     <option value=""></option>
             <option value="a">a) that deals with facts and real life situations</option>
             <option value="b">b) that deals with ideas and theories</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

       <div class="form-group">
			<label for="q3" class="col-lg-4 control-label">3. I find it easier</label>
		<select>
		     <option value=""></option>
             <option value="a">a) to learn facts</option>
             <option value="b">b) to learn concepts</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">4. In reading nonfiction, I prefer</label>
		<select>
		     <option value=""></option>
             <option value="a">a) something that teaches me new facts or tells me how to do something.  </option>
             <option value="b">b) something that gives me new ideas to think about. </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label"> 5. I prefer the idea of </label>
		<select>
		     <option value=""></option>
             <option value="a">a) certainty. </option>
             <option value="b">b) theory. </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		    <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">6. I am more likely to be considered </label>
		<select>
		     <option value=""></option>
             <option value="a">a) careful about the details of my work. </option>
             <option value="b">b) creative about how to do my work. </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">7. When I am reading for enjoyment, I like writers to </label>
		<select>
		     <option value=""></option>
             <option value="a">a) clearly say what they mean. </option>
             <option value="b">b) say things in creative, interesting ways.  </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">8. When I have to perform a task, I prefer to </label>
		<select>
		     <option value=""></option>
             <option value="a"> a) master one way of doing it.</option>
             <option value="b"> b) come up with new ways of doing it.</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

  <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">9. I consider it higher praise to call someone </label>
		<select>
		     <option value=""></option>
             <option value="a">a) sensible.</option>
             <option value="b">b) imaginative. </option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		    <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">10. I prefer courses that emphasize</label>
		<select>
		     <option value=""></option>
             <option value="a">a) concrete material (facts, data).</option>
             <option value="b">b) abstract material (concepts, theories).</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>
		  
		    <div class="form-group">
			<label for="q4" class="col-lg-4 control-label">11. When I am doing long calculations, </label>
		<select>
		     <option value=""></option>
             <option value="a">a) I tend to repeat all my steps and check my work carefully. </option>
             <option value="b">b) I find checking my work tiresome and have to force myself to do it.</option>
			</select>
		  </div><!-- End form group -->
		   <br><br>

	 <div class="form-group">
		<div class="col-lg-10 col-lg-offset-2">
		<div style="position:relative;left:250px;top:0px";>
		  <button type="submit" align=left class="btn btn-success btn-lg">Submit</button>
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
