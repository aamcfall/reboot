<?php
//NEW

$host = localhost;
$username = root;
$pass = root;
$database = HackU;

$conn = mysqli_connect($host, $username, $pass, $database);

if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
  }
 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    session_start();
 
    $user = $_SESSION['user'];
    

	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];
	$q10 = $_POST['q10'];
	$q11 = $_POST['q11'];
	
	$questions = array ($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11);
	
	$a = 0;
	$b = 0;
	
	for($x=0; $x<sizeof($questions); $x++)
	{
	   
	   if($questions[$x] == "a")
	   {
	      $a++;
	   }
	   else
	   {
	      $b++;
	   }
	}
	
	if ($a > $b)
	{
	   $trait = 'sensing'; 
	}
	else 
	{
	   $trait = 'intuitive';
	}
	
    
   

  	if(isset($_REQUEST['submit'])!='') {
  		if($_POST['q1']=='' || $_POST['q2']=='' || $_POST['q3']==''|| $_POST['q4']==''|| $_POST['q5']==''|| $_POST['q6']==''|| $_POST['q7']==''|| $_POST['q8']=='' || $_POST['q9']=='' || $_POST['q10']=='' || $_POST['q11']=='')
  		{
		Echo "please fill the empty field.";
  		}
  
  
  else {
       
       
       

	
       
       
   
       if($trait == 'sensing')  
       {
         
         
         
          	/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		
		

		$query = "SELECT path FROM sen_pretest ORDER by ID DESC LIMIT 1";

		if ($result = mysqli_query($conn, $query)) {

			/* fetch associative array */
			while ($obj = mysqli_fetch_object($result)) {
				$check = $obj ->path;
				echo $check;
				//printf("%s",$obj->path);
			}

			/* free result set */
			mysqli_free_result($result);
		}

		/* close connection */
		//mysqli_close($conn);
         
          
          
          
          
          if($check == 'sensing')
          {
             $path = 'intuitive';
          }
          else
          {
             $path = 'sensing';
          }
      }
       
       
       
       
       
         if($trait == 'intuitive')  
       {
        
        
          	/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		
		

		$query = "SELECT path FROM in_pretest ORDER by ID DESC LIMIT 1";

		if ($result = mysqli_query($conn, $query)) {

			/* fetch associative array */
			while ($obj = mysqli_fetch_object($result)) {
				$check = $obj ->path;
				echo $check;
				//printf("%s",$obj->path);
			}

			/* free result set */
			mysqli_free_result($result);
		}

		/* close connection */
		//mysqli_close($conn);
          
          
          if($check == 'sensing')
          {
             $path = 'intuitive';
          }
          else
          {
             $path = 'sensing';
          }
      }
     
       

        if ($trait == 'sensing')
        {
  		   $sql = "INSERT INTO sen_pretest (Username, a, b, path) 
  		   VALUES (?, ?, ?, ?)";
  		}else
  		{
  		   $sql = "INSERT INTO in_pretest (Username, a, b, path) 
  		   VALUES (?, ?, ?, ?)";
  		}
  		
  		
  		
  		
  		$_SESSION['trait'] = $trait;
  		
  		
  		
  		$stmt = $conn->prepare($sql);
  	
  		$stmt->bind_param('ssss', $user, $a, $b , $path );
  		
  
  		
  		$result = $stmt->execute() or trigger_error($stmt->error.". Query: ".$sql);  	
  		
  		header("Location: mal_pretest.php");	
  		
  	
    }
  }
  
  
    		



?>