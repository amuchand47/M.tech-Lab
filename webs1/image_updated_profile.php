<?php 

include 'dbh.php';


$uid = $_POST['uid'];

$sql = " SELECT * FROM users WHERE user_uid = '$uid '  " ;

#$data = mysql_query($sql);


$result = $con->query($sql);    

// Checking the user exist in database or not 

if ( $result ->num_rows > 0 ){	
  
     
	 while ($row = $result->fetch_assoc() ) {
		   echo "<br> ";
		   echo "<br> First Name : ".$row['user_first'];
		   echo "<br> Last Name : ".$row['user_last'];
		   echo "<br> Email Id : ".$row['user_email'];
		   echo "<br> Update Profile for user id: ".$row['user_uid'];
		   echo "<br> ";
     }
	 
}
	
else{
	  echo "<h1 style='color:blue; border:2px red solid; text-align: center' > Try Again! Your Password is Wrong </h1>";
	  echo " <a href='index.html'> Back to Login</a>";
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
$name = $_FILES['profilePicture']['name'];


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profilePicture"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["profilePicture"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"],  $target_dir. $name )){
		echo " <h1 > Updated Profile  </h1>";
        echo "The file ". basename( $_FILES["profilePicture"]["name"]). " has been uploaded. ";
		echo "<br>";
		echo "Type: " . $_FILES["profilePicture"]["type"] . "<br>";
        echo "Size: " . ($_FILES["profilePicture"]["size"] / 1024) . " kB<br>";
        
		//resize($_FILES["profilePicture"], $target_dir, 340, 340);
		$img="uploads/".$name;
		echo '<img src= "'.$img.'">';
		echo " <a href='index.html'>Log Out </a>" ;
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>