<?php
session_start();
if(!isset($_SESSION['uname']))
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="D:\server\htdocs\gjicr\vendor\css/dashboard.css">
</head>
<body>

    <!-- -------------------for  responsive menubar-------------------------->
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">New Submissions</a></li>
        <li><a href="#">Track Status</a></li>
        <li><a href="">Research Publication</a></li>
      </ul>
    </div>
  </div>
</nav>

<!------------------------------------------Dash Borad ------------------------------------------------------ -->
<div class=" container-fluid">
    <!---------------------- sidebar------------------ -->
  <div class="row content">
    <!-- sidenav list -->
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Dashboard</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Profile</a></li>
        <li><a href="#section3">New Submissions</a></li>
        <li><a href="#section4">Track Satus</a></li>
        <li><a href="#section5">Research Publication</a></li>
        <li><a href="#section6">Help</a></li>

        <a href="logout.php">logout</a>
      </ul><br>
    </div>
    <!-- side nav list end -->
    <br>
    <!-------- right side content ------->
    <div class="col-sm-9">
      <div class="dashboard-head well">
        <h4>Dashboard</h4>
      </div>

      <div class="row">

        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
    </div>


      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>

        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>


    </div> <!--right side conten end-->
  </div>  <!-- row content  end -->

</div>  <!--Container fluid end-->


</body>
</html>

<?php
echo"Hello admin".$_SESSION['uname'];

?>