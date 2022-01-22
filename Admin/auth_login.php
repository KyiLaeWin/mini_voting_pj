<?php
session_start();
?>
<?php
include('../connect.php');

if(isset($_POST['button']))
  {
  $email=$_POST['email'];
  $password=$_POST['password'];

}
  

  $query=mysqli_query($conn,"SELECT aid,email,password from admin");
  $admin=mysqli_fetch_array($query);

  $que_email=$admin['email'];
  $que_password=$admin['password'];
  $que_aid=$admin['aid'];

  if($email==$que_email&&$password==$que_password)

{
    $_SESSION['aid']=$que_aid;
    $_SESSION['aname']=$email;
    $_SESSION['apassword']=$password;


     echo "<script>
    alert('Success login');
    location.assign('admin_home.php');
    </script>";
    
}
else{

  
      $_SESSION['error']="Invalid Data";
      header('Location:admin_login.php');
}






?>