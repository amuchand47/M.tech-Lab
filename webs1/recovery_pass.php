<?php

include 'dbh.php';

$uid = $_POST['uid'];

$sql = " SELECT * FROM users WHERE user_uid = '$uid ' " ;

$result = $con->query($sql);  

if ( $result ->num_rows > 0 ){	
  
	
	if( $result ->num_rows>0 ){
     
	 while ($row = $result->fetch_assoc() ) {
		   echo "<br> ";
		   echo "<br> Your Password is : ".$row['user_pwd'];
     }
	 
    }
	

}
else{
	  echo "Wrong Username";
}





?>