<?php

include 'dbh.php';

$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$u_name = $_POST['user_name'];
$eid = $_POST['email_id'];
$city = $_POST['city'];


$sql = " SELECT * FROM users WHERE user_uid = '$u_name ' " ;

$result = $con->query($sql);    


// Checking the user exist in database or not 

if (  $result ->num_rows > 0 ){	
  
	 $sqli = "UPDATE users SET user_first= '$f_name', user_last = '$l_name' , user_email= '$eid' WHERE user_uid='$u_name' ";

	 $resulti = $con->query($sqli);   
	 
	 if ($resulti === TRUE)
	 {
	    echo "<h1 style='color:blue; border:2px red solid; text-align: center' > Successfully Updated! </h1>";
	    echo " <a href='index.html'> Back to Login</a>";
		echo " <a href='upload.html'>Upload Profile Image </a> ";
	 }
      
	 
	 
}
	
else{
	  echo "<h1 style='color:blue; border:2px red solid; text-align: center' > Try Again! </h1>";
	  echo " <a href='index.html'> Back to Home</a>";
}


?>