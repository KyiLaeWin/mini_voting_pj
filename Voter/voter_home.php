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
  <link rel="stylesheet" href="../assets/css/style.css">
<head>
	<title>Add Votes</title>
	<style>
	


	</style>
</head>
<body>
	<?php

$sql="SELECT * from position";
$result=mysqli_query($conn,$sql);?>
?>
<div class="box">
            	<form action="choose_pos.php" method="POST">
            	<h3>Current Poll</h3>
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
            	<button class="button btn btn-success" name="submit">Select Candidates</button>
                </form>
            </div>

            <!--     Table  ---->

  <?php
  if(isset($_SESSION['pid'])){
  $pid=$_SESSION['pid'];

$sql="SELECT * from candidate where poid='$pid'";
$result=mysqli_query($conn,$sql);
}

if(isset($_SESSION['pname'])){
	$header_pos=$_SESSION['pname'];
}
else{
	$header_pos="?";
}
?>

<form action="vote.php" method="POST">

<h3 style="color:green;font-size: 25px;font-weight:bold;text-align: center;">Candidate for <?php echo $header_pos; ?></h3>

            <table>
  <tr>
    
    <th>Candidate Name</th>
    
    
  </tr>
  <?php
while($data=mysqli_fetch_assoc($result))
{?>

<tr>
  
    <td><?php echo $data['cname']?></td>
    
    <td><input type="radio" id="can_rad" name="can_rad" value="<?php echo $data['cid']; ?>"
        ></td>
  </tr>

<?php
  
}
?>
</table>;
<?php
					if (isset($_SESSION['error'])){
						$error=$_SESSION['error'];
						echo "<span>";
						echo $error;
						echo "</span>";

					}

					?>
					<br>
<button class="button btn btn-success" style="margin-top:70px;margin-left:750px;" name="submit">Submit</button>
</form>

        
</body>
<?php unset($_SESSION['pid']);
unset($_SESSION['pname']);
unset($_SESSION['error']);
?>
</html>