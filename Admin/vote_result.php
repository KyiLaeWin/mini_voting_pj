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
<head>
	<title>Add Votes</title>
	<style>
		body{
		 background-image: linear-gradient(to right, #654ea3 , #eaafc8);

	}
	.select_pos{text-align: center;margin-top:70px;}
	.select_pos h3{color:green;font-size: 23px;font-weight:bold;margin-bottom: 20px;}
	label{font-size:20px;margin-right:20px;color:green;}
	button{margin-left:20px;}
	span{margin-left:650px;font-size: 20px;color:red;}


	table {border-collapse: collapse;text-align: center;margin:10px auto;}
	td{padding: 23px;}
	th{padding:23px;font-size: 20px;color:green;}
  a{margin-right: 20px;}


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
?>
<div class="select_pos">
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