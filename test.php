<?php

//include "connect.php";

$hostname = "localhost";
$dbname ="project";
$username ="root";
$password ="";
$connected_db= mysqli_connect($hostname,$username,$password,$dbname);


if(!$connected_db){
	
	die("cannot connect  to db");

}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

<style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</style>
</head>
<body>


<div class="header">
</div>

<form action="test.php" method="POST"><p>
<input type="range" id="vol" name="vol1" min="0" max="100">
  <label for="vol">محرك1  </label> 
</p>

<p>
<input type="range" id="vol" name="vol2" min="0" max="100">
  <label for="vol">محرك2  </label> 
</p>


<p>
<input type="range" id="vol" name="vol3" min="0" max="100">
  <label for="vol">محرك3  </label> 
</p>

<p>
<input type="range" id="vol" name="vol4" min="0" max="100">
  <label for="vol">محرك4  </label>
</p>

 <p>
<input type="range" id="vol" name="vol5" min="0" max="100">
  <label for="vol">محرك5  </label> 
</p>

<p>
<input type="range" id="vol" name="vol6" min="0" max="100">
  <label for="vol">محرك6  </label>
</p>

<center>
<input type="button" class="button" name='play' value="Play" />
<button type="submit" name="save" class="button">Save</button>
<center/></form>


</body>
</html>

<?php

     
	 if(isset($_POST['save'])) {	
	 
	 $motor1=intval($_POST["vol1"]);
     $motor2=intval($_POST["vol2"]);
     $motor3=intval($_POST["vol3"]);
     $motor4=intval($_POST["vol4"]);
     $motor5=intval($_POST["vol5"]);
     $motor6=intval($_POST["vol6"]);
    

     
    $query= "UPDATE `motor` SET `motor_1` = '$motor1',
	`motor_2` = '$motor2' ,
	`motor_3` = '$motor3' ,
	`motor_4` = '$motor4' , 
	`motor_5` = '$motor5' ,
	`motor_6` = '$motor6' "; 
												 
     
    
	  $sql=mysqli_query($connected_db,$query);
	 
	     echo "post published done";
	 
	   
	 }

?>