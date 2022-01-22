<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'online');
if(mysqli_connect_errno())
{
	echo "Failed to connect to Mysql".mysqli_connect_error();
}



?>
