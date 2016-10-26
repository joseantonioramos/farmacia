<?php 
$host="localhost";
$bdat="bd_farmacia";
$user="root";
$pass="";
$conn = new mysqli($host,$user,$pass,$bdat);
if($conn->connect_errno > 0){
	die("error en conexion: ".$conn->connect_error);

}
else{
	echo "conexion satisfactoria";
}
?>