<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<?php include("include/header.php"); ?>-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <style>
      .modal-open .modal,.btn:focus{
      outline:none!important;
      .thumbnail{min-height:200px;}
      .jumbotron h1 {font-size: 78px; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;}
      .jumbotron p { font-size: 32px; }
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
     
</head>
<body id="bootstrap-overrides">
	
<?php session_start(); ?>
<?php if(!isset($_SESSION['user'])) : ?>
	<div class="container" style="background-color:#eee;">

			
			

	</div>
	
	
		<!-- Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
 

  				<a href="index.php" class="navbar-brand">Norfolk State University</a>
  		
  			</div><!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  				

  		
                        <form action="second.php" method="post">
                            <div class="form-group">
                                
                                
                                <div style="float:right;width:120px;"> 
				<a href="#LogModal" data-toggle="modal" class="btn btn-lg btn-warning" style="position:relative; left:-250px" > Login </a>
			</div>
			<div style="float:right;width:60px;"> 
				<a href="#RegModal" data-toggle="modal" class="btn btn-lg btn-warning" style="position:relative; left:-50px " > Register </a>
			</div>
                                
                            </div>
                        </form>
                    </div>
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->
	
<?php else : ?>
	
<?php ?>
	
	
		<!-- Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
        <a href="index.php" class="navbar-brand">Norfolk State University</a> 		
  	   </div><!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
           
	                      <div style="float:right;width:100px;"> 
				              <a href="logout.php" align=right class="navbar-brand">Logout</a> 
	                      </div>    
	                      
	                      <div style="float:right;width:100px;"> 
				              <a href="consent.php" align=right class="navbar-brand">Begin</a> 
	                      </div>     
	              
  	       </div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->
                    

<?php endif; ?>
	
   <div class="modal fade" id="RegModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Register <p>(data stored anonymously)</p></h4>
          </div>
          <div class="modal-body">
            <form action="registration.php" method="post">
              <div class="form-group">
                <label for="first-name" class="control-label">First Name:</label>
                <input type="text" class="form-control" name="first-name" id="first-name">

                <label for="major" class="control-label">Major: </label>
                <input type="text" class="form-control" name="major" id="major">
                
                     <br>
                <div class="form-group">
			<label for="Class" class="col-lg-4 control-label">Classification:  </label>
		<select  name="Class">
		     <option value=""></option>
             <option value="1">Freshman</option>
             <option value="2">Sophomore</option>
             <option value="3">Junior</option>
             <option value="4">Senior</option>
             <option value="5">Grad Student</option>
			</select>
		  </div><!-- End form group -->
                
                <label for="email" class="control-label">NSU Email: </label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="username" class="control-label">Username:</label>
                <input type="text" class="form-control" name="username" id="username">
                
                <br>
                <div class="form-group">
			<label for="sex" class="col-lg-4 control-label">Gender:  </label>
		<select  name="sex">
		     <option value=""></option>
             <option value="female">female</option>
             <option value="male">male</option>
			</select>
		  </div><!-- End form group -->
                
                <label for="password" class="control-label">Password:</label>
                <input type="password" class="form-control" name="password" id="password">
                <label for="retypepass" class="control-label">Confirm Password:</label>
                <input type="password" class="form-control" name="retypepass"id="retypepass">
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="submt" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>            
        </div>
      </div>
    </div>

    <div class="modal fade" id="LogModal" role="dialog">
       <div class="modal-dialog">
    
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="user" class="control-label">Username:</label>
                                <input type="text" class="form-control" name="user" id="user">
                                <label for="password" class="control-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="password">
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" value="submt" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
      
            </div>
    </div>

<br><br>
    <div class="container jumbotron" style="background-color:transparent;">
        <div class="row" style="text-align:center; color:white"> 
            <h2 style="text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; font-size:72px;">Registration complete please login to begin</h2>
        </div>
    </div>

<span style="color:#fff; text-shadow: -2px 0 black, 0 1px black, 1px 0 black, 0 -1px black; font-size:30px;">


   
<br><br><br><br><br><br><br><br><br><br>
    <div class="container jumbotron" style="background-color:transparent;">
 
  			

  <div class="container images" style="marigin: auto;">
 <div class="row images" >
    <div class="col-md-4" ></div>
      
    <div class="col-md-4"></div>
  
</div>
</div>


</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

