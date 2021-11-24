<?php
	if(isset($_POST["name"]{
	$server="localhost";
	$username="root";
	$password="";

	$con= mysqli_connect($server,$username,$password);
	
	if(!$con){
		
		die("connection to this database is failed due to".mysqli_connect_error());
	}
echo "success";
	$name=$_POST["name"];
	
	$age=$_POST["age"];
	$number=$_POST["number"];
	$gender=$_POST["gender"];
	$email=$_POST["email"];
	$sql="INSERT INTO 'trip'.`us_trip` (`name`, `age`, `number`, `gender`, `email`) VALUES ('$name', '$age', '$number', '$gender', '$email');";
	echo $sql;
if($con->query($sql)==true)
{
 echo"successfully inserted";
}
else{
echo "error:$sql<br> $con->sever";
 }
$con->close;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8>
	<meta name="viewport" content="width-device-width,initial-scale=1.0">
	<title>welcome to travel form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<h3>welcome to iit kharagpur us trip form</h3>
	<p>enter your detail and submit this form to confirm your participation
	in the trip</p>
	<form action="index.php" method="post">
	<input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
	<input type="text" name="age" id="age" placeholder="Enter your age"><br><br>
	<input type="number" name="number" id="number" placeholder="Enter your number">
	<br>
	<input type="text" name="gender" id="gender" placeholder="gender">
	<br>
	<input type="email" name="email" id="email" placeholder="email">
	<br>
	<button type="submit">submit</button>
	</form>
	</div>
	<script src="index.js"></script>
</body>
</html>
