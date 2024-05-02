<?php
include("db_connection.php");
if(isset($_POST['client_id'])){
	$delete=$_REQUEST['client_id'];
	$del="DELETE FROM clients WHERE client_id='$delete'";
	$query=mysqli_query($conn,$del);
	if($query==true){

		//echo "data deleted";
		header("location: my_clients.php");
		
	
	}
	else{
		//echo"data not deleted";
	}
}
?>
