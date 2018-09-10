<?php

include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = " SELECT * FROM users WHERE user_uid = '$uid ' AND user_pwd = '$pwd' " ;

#$data = mysql_query($sql);


$result = $con->query($sql);    

// Checking the user exist in database or not 

if ( $result ->num_rows > 0 ){	
  
    echo "<h1 style='color:blue; border:2px red solid; text-align: center'; > Login Successfully </h1>";
	echo " <a href='index.html'>Back to Home</a> ";
	echo " <a href='profile.html'>Update Profile</a>" ;
    
	/*
	
	if( $result ->num_rows>0 ){
     
	 while ($row = $result->fetch_assoc() ) {
		   echo "<br> ";
           echo "<br> First Name: ".$row['user_first'];
           echo " <br> Last Name: " .$row['user_last'];
           echo "<br> Email Id : ".$row['user_email'];
		   echo "<br> User Id : ".$row['user_uid'];
     }
	 
    }
	*/
	

}
else{
	  echo "<h1 style='color:blue; border:2px red solid; text-align: center' > Try Again! Your Password is Wrong </h1>";
	  echo " <a href='index.html'> Back to Login</a>";
}



?>