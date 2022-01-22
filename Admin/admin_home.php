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

  <link rel="stylesheet" href="../assets/css/style.css">

<style>
	
</style>
<body>


            


            <div style="text-align: center;margin-top:30px;">

				<a class="btn btn-primary" href="admin_home.php">Manage Positions</a>
				<a class="btn btn-primary" href="candidate.php" >Manage Candidates</a>
				<a class="btn btn-primary" href="vote_result.php">Vote result</a>
				<a class="btn btn-primary" href="logout.php">Logout</a>
			
            </div>

            <div class="box">
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