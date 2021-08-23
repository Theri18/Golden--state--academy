<?php
$mysqli = new mysql('localhost', 'root', 'mypass123' 'crud') or die(mysqli_error($mysqli));
if(isset($_POST['save '])){
	$name =$_POST['name'];
	$location =$_POST['location'];
 
$mysqli->query ("INSERT INTO input_data (name, location)
VALUES ('$name', '$location'") or die($mysqli->error);
}


?>

