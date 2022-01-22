<?php
include('../connect.php');

$cid=$_GET['id'];
//echo $pid;
$sql="DELETE from candidate where cid='$cid'";
$result=mysqli_query($conn,$sql);

if($result)
{
	header("Location:candidate.php");
}

else{
	echo "<script>
    alert('Cannot Delete');
    location.assign('candidate.php');
    </script>";
}
?>