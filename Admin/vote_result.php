<?php
session_start();
include('../connect.php'); ?>
<!DOCTYPE html>
<html>
<!-- Fontawesome CSS -->
	
<link rel="stylesheet" href="font/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Custom css --->
 <link rel="stylesheet" href="../assets/css/style.css">
<head>
	<title>Add Votes</title>
	<style>
		


	</style>
</head>
<body>
  <div style="text-align: center;margin-top:30px;">

        <a class="btn btn-primary" href="admin_home.php">Manage Positions</a>
        <a class="btn btn-primary" href="candidate.php" >Manage Candidates</a>
        <a class="btn btn-primary" href="vote_result.php">Vote result</a>
        <a class="btn btn-primary" href="logout.php">Logout</a>
      
            </div>


	<?php

$sql="SELECT * from position";
$result=mysqli_query($conn,$sql);?>

<div class="box">
            	<form action="choose_pos_admin.php" method="POST">
            	<h3>Poll Result</h3>
            	<label for="position">Choose Position</label>
            	<select name="position" style="margin-left:43px;font-size: 18px;height: 25px;width:200px;">
            		<option value="select">Select</option>
               <?php
              while($data=mysqli_fetch_assoc($result))
              {?>
            	      
 
                      <option value="<?php echo $data['pid']; ?>"><?php echo $data['pname'] ?> </option>
                      <?php 
                    }?>

                    </select>
            	<button class="button btn btn-success" name="submit">Select Position</button>
                </form>
            </div>

            <!--     Table  ---->

  <?php
  if(isset($_SESSION['pid'])){
  $pid=$_SESSION['pid'];

$sql="SELECT * from candidate  where poid='$pid' ORDER BY vote DESC";

$result=mysqli_query($conn,$sql);
}

if(isset($_SESSION['pname'])){
	$header_pos=$_SESSION['pname'];
}
else{
	$header_pos="?";
}
?>



<h3 style="color:green;font-size: 25px;font-weight:bold;text-align: center;">Vote for <?php echo $header_pos; ?></h3>

            <table>
  <tr>
    
    <th>Candidate Name</th>
    <th>Vote</th>
    
    
  </tr>
  <?php
while($data=mysqli_fetch_assoc($result))
{?>

<tr>
  
    <td><?php echo $data['cname']?></td>
    
    <td><?php echo $data['vote']?></td>
  </tr>

<?php
  
}
?>
</table>;

					


        
</body>
<?php unset($_SESSION['pid']);
unset($_SESSION['pname']);
unset($_SESSION['error']);
?>
</html>