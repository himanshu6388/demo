<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../vendor/CSS/register.css">
</head>
<body>
  <!-- header -->
  <div class=" header-top container-fluid p-5  text-white text-center">
    <img class="logo" src="https://tse2.mm.bing.net/th?id=OIP.UHFmXrPTR6jecCz61zehkAHaHc&pid=Api&P=0&h=180" alt="">
      <h1>Journal Research</h1>
      <p>www.journalresearch.com</p> 
    </div>
    <!-- header end -->
<div class="container mt-5">
  <div class="row">
    <!------------------------------------------- Login Form ------------------------------->
    <div class="col-md-6">
      <h2 class="text-center">Login</h2>
      <form action="" method="post"> 
        <div class="form-group">
          <label for="loginEmail">Email address</label>
          <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="loginPassword">Password</label>
          <input type="password" class="form-control" id="loginPassword" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>

    <!-- -------------------------Register Form ----------------------------------->
    <div class="col-md-6">
      <h2 class="text-center">Register</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="registerName">Name</label>
          <input type="text" class="form-control" id="registerName" placeholder="Enter your name" name="txtName">
        </div>
        <div class="form-group">
          <label for="registerEmail">Email address</label>
          <input type="email" class="form-control" id="registerEmail" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="registerPassword">Password</label>
          <input type="password" class="form-control" id="registerPassword" placeholder="Password" name="txtPass">
        </div>
        <div class="form-group">
          <label for="confirmPassword">DOB</label>
          <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <button type="submit" class="btn btn-success btn-block" name="submit">Register</button>
      </form>
    </div>

  </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault();
      // Add validation logic here
      alert('Form submitted!');
    });
  </script>
  

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
     if(isset($_POST['submit']))
     {
      $name=$_POST['txtName'];
      $email=$_POST['email'];
      $pass=$_POST['txtPass'];
      $dob=$_POST['dob'];



$querystring="INSERT INTO uregistration( name, emailid, password, dob)
VALUES('$name','$email','$pass','$dob')";

if($connn->query($querystring)===TRUE){

  echo"Record added sucessfullly";
}else {

  echo"Error in record insertion ".$querystring."<br>".$conn->error;
}

// echo"Name is : ".$name."<br>";
// echo"email is: ".$email. "<br>";
// echo"Password is :".$pass. "<br>";

// echo"DOB is: ".$dob. "<br>";

// }else{
// echo"Please Fill The Form";
}


?>