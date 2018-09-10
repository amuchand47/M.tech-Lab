<?php

include 'dbh.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body> 

    <div class="w3-padding-16 w3-red w3-circle w3-center">
   <h1>Project-2</h1>
    </div>
    
    <div class="login">
	<h1  style = " text-align: center " >Sign In </h1>
	<form  class="signin-form" action="recovery_pass.php"  method="POST">
	Username:   <input type="text" name="uid" placeholder="Username"><br>
	    <button type="submit"> Forgot Password </button>	
	</form>
    </div>

</body>

</html> 