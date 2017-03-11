<link rel="stylesheet" type="text/css" href="http://www.tristanchaudhry.com/style.css" />
<script src="https://use.typekit.net/emr6ugk.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel="shortcut icon" type="image/ico" href="http://www.tristanchaudhry.com/favicon.ico" />
<link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.css">
<link rel="stylesheet" href="http://dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css">
<!-- INSERT SYMBOL STYLESHEETS-->
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">

<?php
session_start();
include_once 'dbconnect.php';


if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Tristan Chaudhry's dashboard</label>
    </div>
    <div id="right">
     <div id="content">
         What's up, <?php echo $userRow['username']; ?>?&nbsp;<a href="logout.php?logout">Sign Out</a>
         <br /><br /><br />Add a new item to portfolio.<br /><br />
         
         
        <form method="post" action="process.php">
       
         Title:<input type="text" name="title"><br /><br />
         Category: 
				<select name="category">
 					<option value="Android">Android</option>
  					<option value="iOS">iOS</option>
  					<option value="Web">Web</option>
				</select><br /><br />
         Link:<input type="text" name="link" ><br /><br />
         Link to Image File(600x400px): <input type="text" name="image" /><br /> <br />   
         Technologies Used:</br>
          <input type="checkbox" name="checkbox[]" value="html">HTML 5<br>
          <input type="checkbox" name="checkbox[]" value="css">CSS 3<br>
          <input type="checkbox" name="checkbox[]" value="javascript">Javascript<br>
          <input type="checkbox" name="checkbox[]" value="php">PHP<br>
          <input type="checkbox" name="checkbox[]" value="wordpress">Wordpress<br>
          <input type="checkbox" name="checkbox[]" value="illustrator">Illustrator<br>
          <input type="checkbox" name="checkbox[]" value="photoshop">Photoshop<br>
          
         <input type="submit">  
         </form>
        </div>
    </div>
</div>
<br />
<br />
<br />


<?php
$link = mysqli_connect("localhost", "tmc5614", "ghost07rider", "tristanprojects");
//get results from database
$result = mysqli_query($link,"SELECT * FROM info");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>

<br /><br /><br /><br />
<h1>Here is the stuff seperated.</h1><br /><br />

<?php 
$link = mysqli_connect("localhost", "tmc5614", "ghost07rider", "tristanprojects");
$result = mysqli_query($link,"SELECT * FROM info WHERE category = 'Web'");
$all_property = array();  //declare an array for saving property

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
?>

<!--********************************************* -->
 
<div id="show-pictures">
		<div id="ajax-popup-link-1" class="ajax-popup-link">
			<div class="popup-inner">
			<div class="upper">
  			<h3>Portfolio Item Overview</br></h3>
    		<a href="http://www.free2bmediet.com" class="popup-url">Free 2 B Me Diet</a>
   		</div>
    <div class="middle">
    
    	<a href="http://www.free2bmediet.com"><img src="http://www.tristanchaudhry.com/images/image.jpg">
        </img></a>
    </div>
    <div class="line-black"></div>
    <div class="technologies">
    <h3>Technologies Used</h3>
    	<div class="columns">
    		<i class="devicon-html5-plain-wordmark colored"></i>
            <i class="devicon-javascript-plain colored"></i>
            <i class="devicon-css3-plain-wordmark colored"></i>
            <i class="devicon-wordpress-plain-wordmark colored"></i>
            <i class="devicon-illustrator-line colored"></i>
            <i class="devicon-photoshop-line colored"></i>
            <i class="devicon-php-plain colored"></i>
    	</div>
    </div>
    </div>
  </div>
</div>
<!--********************************************* -->    
   
</body>

</html>