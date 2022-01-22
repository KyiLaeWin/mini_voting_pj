<?php 
session_start();
include('../connect.php'); ?>
<html>

<!-- Fontawesome CSS -->
	
<link rel="stylesheet" href="font/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	body{
		 background-image: linear-gradient(to right, #654ea3 , #eaafc8);

	}
	a{margin-right: 20px;}
	.add_pos{text-align: center;margin-top:70px;}
	.add_pos h3{color:green;font-size: 23px;font-weight:bold;margin-bottom: 20px;}
	label{font-size:20px;margin-right:20px;color:green;}
	button{margin-left:20px;}

	table {border-collapse: collapse;text-align: center;margin:10px auto;}
	td{padding: 23px;}
	th{padding:23px;font-size: 20px;color:green;}
</style>
<body>


            


            <div style="text-align: center;margin-top:30px;">

				<a class="btn btn-primary" href="admin_home.php">Manage Positions</a>
				<a class="btn btn-primary" href="candidate.php" >Manage Candidates</a>
				<a class="btn btn-primary" href="vote_result.php">Vote result</a>
				<a class="btn btn-primary" href="logout.php">Logout</a>
			
            </div>

            <div class="add_pos">
            	<form action="position_add.php" method="POST">
            	<h3>Add New Position</h3>
            	<label for="position">Positon Name</label>
            	<input type="text" name="position" id="position">
            	<button class="button btn btn-success" name="submit">Submit</button>
                </form>
            </div>

<?php
$sql="SELECT * from position";
$result=mysqli_query($conn,$sql);?>


<table>
  <tr>
    <th>Position Id</th>
    <th>Position Name</th>
    
  </tr>
  <?php
while($data=mysqli_fetch_assoc($result))
{?>

<tr>
    <td><?php echo $data['pid']?></td>
    <td><?php echo $data['pname']?></td>
    <td><a class="btn btn-danger" href="position_delete.php?id=<?= $data['pid']?>">Delete</a></td>
  </tr>

<?php
  
}
?>
</table>;

           






</body>
</html>		