<?php 

include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = " SELECT * FROM users WHERE user_uid = '$uid ' AND user_pwd = '$pwd' " ;

#$data = mysql_query($sql);


$result = $con->query($sql);    

// Checking the user exist in database or not 

if ( $result ->num_rows > 0 ){	
  
     
	 while ($row = $result->fetch_assoc() ) {
		   echo "<br> ";
		   echo "<br> Update Profile for user id: ".$row['user_uid'];
     }
	 
}
	
else{
	  echo "<h1 style='color:blue; border:2px red solid; text-align: center' > Try Again! Your Password is Wrong </h1>";
	  echo " <a href='index.html'> Back to Login</a>";
}


?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
body{
	background-color: gray;
}

h1{
color: green;	
}
</style>	
	
</head>


<body> 
     
	<h1>Update Profile </h1> 
    
    <div class="login">
	<h1  style = " text-align: center " > </h1>
	<form  class="signin-form" action="update_profile.php"  method="POST">
	First Name:   <input type="text" name="first_name" placeholder="Firstname"><br>
	Last Name :   <input type="text" name="last_name" placeholder="Lastname"><br>
	User Name :   <input type="text" name="user_name" placeholder="Username"><br>
	Email :   <input type="text" name="email_id" placeholder="Email"><br>
	Current City :   <input type="text" name="city" placeholder="City"><br>
		
		<button type="submit">Update profile </button>	
	<a href='index.html' > Back to Home </a>		
	</form>
    </div>


</body>

</html> 




