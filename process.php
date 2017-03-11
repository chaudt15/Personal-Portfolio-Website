<?php
$link = mysqli_connect("localhost", "tmc5614", "ghost07rider", "tristanprojects");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


	 $title = $_POST['title'];
	 $checkk= $_POST['checkbox'];
     $category = $_POST['category'];
     $link1 = $_POST['link'];
     $url = $_POST['image'];
	 $techh=implode(',', $_POST['checkbox']);
  
 
// Attempt insert query execution
$sql = "INSERT INTO info (title, category, link, image, technologies) VALUES ('$title','$category','$link1','$url','$techh')";

if(mysqli_query($link, $sql)){
	 
	
	
    echo "Portfolio item added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<div id="return">
<a href="http://www.tristanchaudhry.com/home.php">Click Here To Go Back To Your Dashboard</a>
</div>

