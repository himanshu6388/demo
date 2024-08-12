<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register-Page</title>
    <link rel="stylesheet" href="../vendor/BootStrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../vendor/css/register.css">
    <script src="../vendor/BootStrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="main-container" style="margin-top: -20px;">
        <div class="img">
            <img src="../image/journal-1 (1).webp" alt="" class="mx-auto d-block" class="img-fluid">
        </div>
        <br>
        <div class="container">
            <h2>Register Now</h2>
            <form method="POST">
                <div class="inputs">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="txtName" required>
                </div>
                <div class="inputs">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="inputs">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="txtPass" required>
                </div>
                <div class="inputs">
                    <label >Role</label>
                    <select name="optrole">
                        <option value="1">Admin</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>

                    </select>

                </div>

                <button name="submit" >Login</button>
            </form>

        </div>
    </div>


    </div>
</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['txtName'];
    $mail=$_POST['email'];
    $pass=$_POST['txtPass'];
    $role=$_POST['optrole'];

    //Duplicate heck Start
    $sql="SELECT * FROM userlogin WHERE uname='$mail'";
    $result=$connn->query($sql);

    if($result->num_rows >0)
    {
        header("location:login.php?m=d");
        // location:login.php?m=d
    }
    else{

    $querystring="INSERT INTO uregistration( name, emailid, password, role)
     VALUES ('$name','$mail','$pass','$role')";
 if($connn->query($querystring)===TRUE)
 {
    
   
    $sql="INSERT INTO userlogin(uname, password) 
    VALUES ('$mail','$pass')";
    if($connn->query($sql)===TRUE)
    {
        header("location:login.php?m=s");
    }

 }
 else
 {
    echo"error in record insertion ".$querystring."<br>".$connn->error;
 }
    }

}
else{
   // echo"submit not clicked";
}


?>