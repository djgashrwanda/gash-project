<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/page4.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update client</title>
</head>
<body>
<form method="POST" action="add.php">
			<h1 style="margin-top: 100px; margin-left: 35%;"><u>UPDATE CLIENT</u></h1>
	<div class="body">

	Name <input type="text" name="name" placeholder="Edison" aria-disabled="true"><br><br><br>
	Email <input type="text" name="email" placeholder="Edison"><br><br><br>

	Phone   <input type="text" name="phone" placeholder="Edison"><br><br><br>

	Address<input type="text" name="address" placeholder="Edison"><br><br><br>

	<button type="submit" class="sub" nam="btn">UPDATE</button>
	<button class="canc"><a href="my_clients.php">cancel</button>
	</div>
</form>
<?php
include('db_connection.php');
if (isset($_POST['btn'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="INSERT INTO clients(name,email,phone,address)VALUES('$name','$email','$phone','$address')";
$query=mysqli_query($conn,$sql);
if ($query) {
	echo "data inserted";

}
else{
	echo "data not inserted";
}
}



?>
</body>
</html>