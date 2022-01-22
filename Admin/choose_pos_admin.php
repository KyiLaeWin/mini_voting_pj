<?php
session_start();
include('../connect.php');

if(isset($_POST['submit'])){
    $position_id=$_POST['position'];
}
$sql="SELECT pname from position where pid='$position_id'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
$position_name=$data['pname'];

$_SESSION['pid']=$position_id;
$_SESSION['pname']=$position_name;





header("Location:vote_result.php");

 ?>   