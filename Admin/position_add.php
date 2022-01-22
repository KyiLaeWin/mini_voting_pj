<?php
include('../connect.php');

if(isset($_POST['submit'])){
	$position=$_POST['position'];


$select="SELECT * from position where pname='$position'";

$run=mysqli_query($conn,$select);
$count=mysqli_num_rows($run);

if($count==0){

$sql="insert into position (pname) values('$position')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
	alert('Sucessfully Added');
	location.assign('admin_home.php')
	</script>";
}
}
else{
	echo "<script>
	alert('Position name already exit');
	;
	location.assign('admin_home.php')
	</script>";

}
}



?>