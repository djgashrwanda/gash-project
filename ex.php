<form method="POST" action="my_client.php">
  <table>
  <tr>
<th>ID</th>
	<th>NAME</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th>
	<th colspan="2">ACTION</th>
</tr>
	</thead>
	 <?php
	 include("db_connection.php");
	 $select="SELECT client_id,name,email,phone,Address FROM clients";
	 $query=mysqli_query($conn,$select);
	 while ($row=mysqli_fetch_array($query))
	  {
	 	?>
	 	<tr>
	 		<td><?php echo $row['ID'];?></td>
	 		<td><?php echo $row['NAME'];?></td>
	 		<td><?php echo $row['Email'];?></td>
	 		<td><?php echo $row['Phone'];?></td>
	 		<td><?php echo $row['Address'];?></td>
	 		<td><button style=" background-color: yellow; text-decoration: none; color:red; border-radius: 3px;"><a href="delete.php?client_id=<?php echo $row['client_id'];?>">delete</a></button></td>
	 		<td><button style=" background-color: yellow; text-decoration: none; color:red; border-radius: 3px;"><a href="update.php?client_id=<?php echo $row['client_id'];?>">change</a></button></td>
	 	</tr>
	 	<?php

	 }

	 ?>

    
  
</table>