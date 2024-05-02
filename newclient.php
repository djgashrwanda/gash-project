<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/page4.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pagr4</title>
</head>
<body>
<form method="POST" action="newclient.php">
	<h1 style="margin-top: 100px; margin-left: 40%;"><u>New client</u></h1>
	<div class="body">

	Name      <input type="text" name="name" placeholder=""><br><br><br>
	Email      <input type="text" name="email" placeholder=""><br><br><br>

	Phone      <input type="text" name="phone" placeholder=""><br><br><br>

	Address      <input type="text" name="address" placeholder=""><br><br><br>

	<button type="submit" name="submit" class="sub" >SUbmit</button>
	<button class="canc"><a href="my_clients.php">Cancel</button>
	</div>
</form>
<?php
include('db_connection.php');
if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="INSERT INTO clients(name,email,phone,address)VALUES('$name','$email','$phone','$address')";
$query=mysqli_query($conn,$sql);
if ($query) {
	header('location:my_clients.php');
	
   mysqli_close($conn);
   exit();
}
else{
	echo "data not inserted";
}
}



?>
</body>
</html>