<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background-image:url('https://i.ytimg.com/vi/KDf8n0IJqcs/maxresdefault.jpg');
background-repeat:no-repeat;
background-size:cover;
}

</style>
</head>
<body class="bg-warning">

<br><br><br>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include 'server.php';

    $email = $_POST['mail'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM login WHERE EMAIL='$email' AND PASSWORD='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //echo "Login successful";
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password']=$password;
        header("Location: LENSCRAFT.php");
        exit();
    } else {
       //echo "Login failed";
        echo "<div class='alert alert-danger'><center>Invalid email or password</center></div>";
    }

    $conn->close();
}
?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card border-primary login-container">
          <div class="card-header bg-primary text-white text-center">
            <h3>Login</h3>
          </div>
          <div class="card-body">
            <form class="form-horizontal" action="login.php" method="POST">
              <div class="form-group">
                <label for="Email" class="col-form-label">Email :</label>
                <input type="email" class="form-control" id="mail" name="mail" required>
              </div>
              <div class="form-group">
                <label for="password" class="col-form-label">Password :</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remember">
                  <label class="custom-control-label" for="remember">Remember me</label>
                </div>
              </div>
              <div class="form-group">
               <center> <button type="submit" class="btn btn-primary">Login</button></center>
              </div>
            </form>
          </div>
          <div class="card-footer text-muted text-center">
            If You Don't Have an account? <a href="signup.php">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>


