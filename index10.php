<?php
include "dbconnect.php";

if (isset($_POST["save"])) 
{
   // echo "Yes, clicked";    

$name=$_POST['name'];
$location=$_POST['location'];

//echo "$name", "$location";


 $sql = "INSERT INTO  input_data  (name, location)
VALUES ('$name', '$location')";
if (mysqli_query($conn, $sql)) {
  echo "New information saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


}

?>






<html>
<head>
	<title>PHP CRUD</title>
	<script scr="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"></script>
</head>

<body>
	
	<?php
	
		//$result = $mysqli->mysqli_query("SELECT * FROM data") or die($mysqli->error);
	?>
	<div class="row justify-content-center">
	<form method="POST">
		
	<div class="form-group">
		<lable>Name</lable>
		<input type="text" name="name" class="form-control" placeholder="Enter your name">
	</div>
	<div class="form-group">
		<lable>Location</lable>
		<input type="text" name="location" class="form-control" placeholder="Enter your location">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary" name="save">Save</button>
	</div>

</div>
	 
	</form>
</body>

