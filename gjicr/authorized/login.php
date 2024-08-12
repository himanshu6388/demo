<?php
session_start();
if(isset($_GET['m']))
{
    if($_GET['m']=='s')
    {
        echo"<script>alert('Registration Sucessfull')</script>";
    }
    elseif($_GET['m']=='d')
    {
        echo"<script>alert('User Already Registered')</script>";
    }
}


?>
<?php
include("connection.php")

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login-Page</title>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/css/register.css">
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="main-container" style="margin-top: -20px;">
        <div class="img">
            <img src="../img/logofinal-removebg-preview.png" alt="" class="mx-auto d-block" class="img-fluid">
        </div>
        <br>
        <div class="container">
            <h2>Login</h2>
            <form id="loginForm" method="POST">
                <div class="inputs">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="txtname" required>
                </div>
                <div class="inputs">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="txtpass" required>
                </div>
                <div class="inputs">
                <label >Role</label>
                    <select name="role">
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>

                    </select>
                </div>

                <button type="submit" name="submit">Login</button>
            </form>
            <div style="margin-top: 15px;">
                <a href="" type="link" class="link" style="color: blue;  ">Register Now!!</a>
            </div>
        </div>
    </div>

<!-- 
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">


                <div class="modal-header">
                    <h4 class="modal-title">Register Now!!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>


                <div class="modal-body">
                    <form method="POST">
                        <div class="formgroup">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="txtName" required>
                        </div>

                        <div class="formgroup">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>


                        <div class="formgroup">
                            <label for="password">Choose Your Password:</label>
                            <input type="password" id="password" name="txtPass" required>
                        </div>
                        <button name="submit">Submit</button>
                    </form>


                </div>




            </div>
        </div>





    </div> -->
</body>

</html>
<?php

if(isset($_POST['submit']))
{
    $loginid=$_POST['txtname'];
    $pass=$_POST['txtpass'];

    $sql="SELECT * FROM userlogin WHERE uname='$loginid' AND password='$pass'";
    $result=$connn->query($sql);

    if($result->num_rows > 0)
    {
        $_SESSION['uname']=$loginid;
        header("location:dashboard.php");
    }else{
        echo"<script>alert('Login Id or Pass Is Incorrect')</script>";
        
    }
   
}
else{
   // echo"submit not clicked";
}

?>