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
	
  	<div class="jumbotron">
  		<div class="container text-center">
  			<h1>MATHMATICAL MODEL</h1>
  		</div><!-- End container -->
  	</div>
  <div class="container">
    <section>
      <div class="page-header" id="contact">
         <H2><b>VIRUS </b> </H2>    
        
         <p>
         The "Compressed Virus" illustrates the operation of a compression virus. If a virus latches on to a file making the file noticeably 
         longer than the original file it can easily be detected. However, a compression virus compresses the 
         executable file so that both the infected and uninfected versions are of identical length.
          We begin at time t0, where program P1 is infected with virus CV, 
         and a clean program P2, which is not infected with CV. 
         </p>
         <br><br>
         <p>
         When executable file P1 is executed, control passes to its virus, which performs the following steps:
        </p> 
        <br> 
         <p><b>t0</b> For each uninfected file P2 that is found, the virus first compresses that file to produce P′2, which is shorter than the original program by the size of the virus.</p> 
         <p><b>t1</b> A copy of CV is prepended to the compressed program.</p>  
         <p><b>t2</b> The compressed version of the original infected program, P′1, is uncompressed.</p>  
         <p><b>t3</b> The uncompressed original program P1 is executed.</p>  
            <div align="center"> 
            
            <br>
               <h1>Compression Virus</h1>
               <img src="../pics/virus.jpg" alt="A Compression Virus" style="width:610px;height:560px;">
            </div>
            
               <br><br><br><br><H2><b>WORM</b> </H2>  
               
               <p>
               A well-designed worm can spread rapidly and infect massive numbers of hosts. It is useful to have a general model for the rate 
               of worm propagation. Thus we can look to classic epidemic models for understanding worm propagation behavior. 
               A simplified, classic epidemic model can be expressed as follows:
               </p>
               
               
               <div align="center"> 
                  <img src="../pics/worm_math.jpg" alt="" style="width:125px;height:75px;">
               </div>
               <p>Where</p> 
               <p><b>I(t) </b>= number of individuals infected as of time t </p> 
               <p><b>S(t) </b>= number of susceptible individuals (susceptible to infection but not yet infected) at time t </p>
               <p><b>b </b>= infection rate </p>
               <p><b>N </b>= size of the population, N = I(t) + S(t) </p>
               
                <br><br><p>
                The "Worm Propagation Model" shows the dynamics of worm propagation. Propagation proceeds through three phases. 
                
                <p>
                In the initial phase, the number of hosts increases exponentially. 
                To see that this is so, consider a simplified case in which a worm is launched from a single host and infects two nearby hosts. 
                Each of these hosts infects two more hosts, and so on. This results in exponential growth. 
                After a time, infecting hosts waste some time attacking already infected hosts, which reduces the rate of infection. 
                </p>
                <p>
                During this middle phase, growth is approximately linear, but the rate of infection is rapid. 
                </p>
                <p>
                When most vulnerable computers have been infected, the attack enters a slow finish phase as the worm seeks out those remaining hosts that are difficult to identify.
                Clearly, the objective in countering a worm is to catch the worm in its slow start phase, at a time when few hosts have been infected.
                </p>
 
 
               
                  <div align="center"> 
                     <h2>Worm Propagation Model</h2>
                
                        <img src="../pics/worm.jpg" alt="" style="width:600px;height:530px;">
                  </div>
            </div>
</body>




<!-- Footer -->

<footer>
   <form action="../mal_posttest.php" method="post">
    <div align="center"> 
        <div class="form-group" >
           <div class="wrapper">
              <button  type="logout" name="mal_posttest.php" value="logout" class="btn btn-lg btn-success">Continue</button>
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
