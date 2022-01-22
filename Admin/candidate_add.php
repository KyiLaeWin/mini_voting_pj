<?php
include('../connect.php');

if(isset($_POST['submit'])){
    $position_id=$_POST['position'];

	$can_name=$_POST['candidate'];
	 



$select="SELECT * from candidate where cname='$can_name'";

$run=mysqli_query($conn,$select);
$count=mysqli_num_rows($run);

if($count==0){

$sql="insert into candidate (cname,poid) values('$can_name','$position_id')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('Sucessfully Added');
	location.assign('candidate.php');
	</script>";
}
}
else{
	echo "<script>
	alert('Position name already exit');
	;
	location.assign('candidate.php');
	</script>";

}
}



?>