<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN UP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background-image:url('https://i.ytimg.com/vi/KDf8n0IJqcs/maxresdefault.jpg');
background-repeat:no-repeat;
background-size:cover;
}
</style>
</head>
<body class="bg-warning">
<?php
$regiter=0;
$userexists=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
  include 'server.php';
  $name=$_POST['name'];
  $email=$_POST['mail'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];
  $sql="SELECT * FROM login WHERE USERNAME='$name'";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      $userexists=1;
      echo "<div class='alert alert-danger'><center>User Already Exits</center></div>";
    }
    else
    {
      if($cpassword==$password)
      {
       $sql="INSERT INTO login (USERNAME,EMAIL,PASSWORD) VALUES('$name','$email','$password')";

       echo "<div class='alert alert-success'><center>DATA ENTERED SUCESSFULLY</center></div>";
       $result=mysqli_query($conn,$sql);
       header("Location:login.php");
       if($result)
       {
         $regiter=1;
       }
       else
       {
         die(mysqli_error($conn));
         header("Location:signup.php");
       }
     }
     else
     {
      echo "<div class='alert alert-danger'><center>PASSWORD AND CONFIRM-PASSWORD ARE NOT SAME</center></div>";
     }
    }
  }
}
?>
<br><br><br>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card border-primary login-container">
          <div class="card-header bg-primary text-white text-center">
            <h3>SIGN UP</h3>
          </div>
          <div class="card-body">
            <form class="form-horizontal" action="signup.php" method="POST">
	      <div class="form-group">
                <label for="username" class="col-form-label">Username :</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="Email" class="col-form-label">Email :</label>
                <input type="email" class="form-control" id="mail" name="mail" required>
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">Password :</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
              </div>
               <div class="form-group">
                <label for="confirm" class="col-form-label">Confirm Password :</label>
                <input type="password" class="form-control" id="cpass" name="cpass" required>
              </div><br><br>
              <div class="form-group">
               <center> <button type="submit" class="btn btn-primary">Sign UP</button></center>
              </div>
            </form>
          </div>
         
        </div>
      </div>
</div>
  </div>
