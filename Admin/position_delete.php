<?php
include('../connect.php');

$pid=$_GET['id'];
echo $pid;
$sql="DELETE from position where pid='$pid'";
$result=mysqli_query($conn,$sql);
$can_sql="DELETE from candidate where poid='$pid'";
$can_result=mysqli_query($conn,$sql);

if($result)
{
	header("Location:admin_home.php");
}

else{
	echo "<script>
    alert('Cannot Delete');
    location.assign('admin_home.php');
    </script>";
}
?>