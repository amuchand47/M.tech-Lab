<?php

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sqi = " SELECT * FROM users WHERE user_uid = '$uid'  " ;  
$check_user = $con->query($sqi);

 
 // Check username already exist or not 
 
if ($check_user ->num_rows > 0){ 
	echo "<h1 style='color:blue; border:2px red solid;'> Username already Exist</h1> ,
	      <a href='index.html'> Try again with different username </a> "; 
}

else{
$sql = "INSERT INTO users(user_first, user_last, user_email,user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd')";
$result = $con->query($sql);

if ($result===TRUE){     // checking for registration 
	
echo "<h1 style='color:blue; border:2px red solid;'> Successfully Regsitered </h1> ,
	  <a href='index.html'> Back to Home </a> ";
   
} 

else{            //Checking for connection 
	echo "<h1 style='color:blue; border:2px red solid;'> Connection not exist </h1> ,
	  <a href='index.html'> Back to Register </a> ";
}

$con->close();	

}

?>