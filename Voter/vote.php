<?php session_start();
include('../connect.php'); 
if(isset($_POST['submit'])){
   if(isset($_POST['can_rad'])){
   	$candidate_id=$_POST['can_rad'];
   	$sql="SELECT vote from candidate where cid='$candidate_id'";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($result);
$vote=$data['vote'];
$vote++;
/*echo $vote;

echo $vote;
*/
$insert_sql="UPDATE candidate set vote='$vote' where cid='$candidate_id'";
$result=mysqli_query($conn,$insert_sql);
if($result){
	$_SESSION['success']="Successfully Voted";
      header('Location:voted_success.php');
}


   }





   else{
   	 $_SESSION['error']="Please select to vote";
      header('Location:voter_home.php');
   }
}









?>