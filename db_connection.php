<?php
//connection variables
$servername="localhost";
$username="root";
$password="";
$dbname="kang_gi_group";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connected failled" .mysqli_connect_error()); 
}












?>