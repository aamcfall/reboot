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

	<?php include("include/nav.php"); ?>

    	<!-- jumbotron-->

  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>   CONSENT</h1>

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
          
 <p> The purpose of this research project is....This is a research project being conducted by..... at Norfolk State University. You are</p> 
        
 <p>invited to participate in this research project because you are.....
 
 <p>Your participation in this research study is voluntary. You may choose not to participate. If you decide to participate in this research survey, you may withdraw at any time. If you decide not to participate in this study or if you withdrawl from participating at any time, you will not be penalized.</p>
 
 <p>The procedure involves filling an online survey that will take approximately 30 minutes. Your responses will be confidential and we do not collect identifying information such as your name, email address or IP address. The survey questions will be about.....</p>
 
 <p>We will do our best to keep your information confidential. All data is stored in a password protected electronic format. To help protect your confidentiality, the surveys will not contain information that will personally identify you. The results of this study will be used for scholarly purposes only and may be shared with SurveyMonkey University representatives.</p>

 <p>If you have any questions about the research study, please contact.....This research has been reviewed according to SurveyMonkey University IRB procedures for research involving human subjects.</p>
 
 <p>ELECTRONIC CONSENT: Please select your choice below.</p>

 <p>Clicking on the "agree" button below indicates that: </p>

 <p>• you have ready the above information</p>
 <p>• you voluntarily agree to participate</p>
 <p>• you are at least 18 years of age </p>

 <p>If you do not wish to participate in the research study, please decline participation by clicking on the "disagree" button.</p>

           
            
      </div><!-- End Page Header -->

<SCRIPT LANGUAGE="JavaScript">
function Disab() {
if(document.form1.cbox.checked) 
{document.form1.Button1.disabled=false}
else {document.form1.Button1.disabled=true}
}
</SCRIPT>



<form name="form1" action="pretest.php" method="get">
   <div align="center"> 
   
   <input style="position:relative; left:-250px" name="cbox" type="checkbox" id="cbox" value="checkbox" onClick=Disab();>
   <a style="position:relative; left:-250px"href="#">terms and conditions</a>
   <button type="submit" class="btn btn-success btn-lg" type=button value="Button" name="Button1" disabled>Agree</button>

   </div><br><br><br>
</form>
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
