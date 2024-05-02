<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<form method="POST" action="">
    <div class="container">
        <div class="top"></div>
      <h1>List Of Clients</h1>
      <div class="link">
      <button class="new"><a href="newclient.php">New Client</a></button>
      <a href="logout.php"><button class="logout">Logout</button></a>
     </div>

     <table cellspacing="20px;">
     	<div class="head">
  <tr> 
    
    <th>ID</th>
    <th>NAME</th>
    <th>Email</th>
    <th>PHONE</th>
    <th>ADDRESS</th>
    <th colspan="2">ACTION</th>
    <tr><td colspan="500px"><hr></td></tr>
  </tr>

  <?php
	 include("db_connection.php");
	 $select="SELECT client_id,name,email,phone,Address FROM clients";
	 $query=mysqli_query($conn,$select);
	 while ($row=mysqli_fetch_array($query))
	  {
	 	?>
	 	<tr>
	 		<td><?php echo $row['client_id'];?></td>
	 		<td><?php echo $row['name'];?></td>
	 		<td><?php echo $row['email'];?></td>
	 		<td><?php echo $row['phone'];?></td>
	 		<td><?php echo $row['Address'];?></td>
			 
	 		<td><button style=" background-color: red; text-decoration: none; color:red; border-radius: 3px;"><a href="delete.php?client_id=<?php echo $row['client_id'];?>">delete</a></button></td>
	 		<td><button style=" background-color: green; text-decoration: none; color:red; border-radius: 3px;"><a href="update.php?client_id=<?php echo $row['client_id'];?>">change</a></button></td>
	 	</tr>
	 	<?php

	 }

	 ?>
  </form>
</table>
    </div>
  
</body>
</html>