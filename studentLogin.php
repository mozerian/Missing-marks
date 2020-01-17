<?php 
session_start();
  include("connection.php");
include ("function.php");
 $error ="";

 //$_SESSION ['reg_N'];


if (empty($_POST)===false)
{

  $regNo = $_POST['regno'];
  $password= $_POST['password'];

$_SESSION['reg_No']= "$regNo" ;
  if(registration_exists($regNo, $con))
  {
     $result = mysqli_query ($con, "SELECT password FROM student WHERE reg_No='$regNo'");
     $retrievepassword = mysqli_fetch_assoc($result);

     if (/*md5*/($password) !== $retrievepassword ['password']) 
     {
       //$error = "password is incorrect";

      ?> <script>alert <?php $error?>('username or password incorect!')</script>";
      <?php

     }
     else
     {
      
      $_SESSION ['reg_No'] === $regNo;

       header("location:studentComplain.php");

     }
    
  }
  else
  {
    //$error="username dos not exist";
     ?> <script>alert <?php $error?>('username or password incorect!')</script>";
      <?php
  }

  /* {
    $insertQuery ="INSERT INTO student(reg_No,fname,lname,phone_Number,password,department_Code,faculty_Code) VALUES ('$regNo','$firstName','$lastName','$phoneNumber','$password','$department','$faculty')";
    if(mysqli_query($con, $insertQuery))
    {
      $error="sucess";
    }
    else{
      $error="failed";
    }
  }
*/
}


 ?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMMCS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
 #wrapperformLogin2{
  border-radius: 10px;
  border: solid;
  background-color: #f2f2f2;
  border-color: grey;
  padding: 20px;
  width: 50%;
  margin: 0 auto;
  
  margin-top: 10px;
}
#form{

  margin-left: 5%;
  margin-right: 5%;
}
input[type=text],select,option{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=password],select,option{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:50%;

}
label{
  width: 40%;
  margin: 5px;

}

@media screen and (max-width: 700px) {
  #wrapperformLogin2 {
    width: 100%;
    margin-top: 2px;
    height: auto;


}
}
}

</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMMCS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><li><a href="#">Log In</a><li>p-->
              <!--<i class="fa fa-envelope-o"></i>-->
          <li><a href="student.php">Sign up</a>

    <li><a href="help.php">Help</a>
               
          </li>
        </ul>
      </div>
    </nav>
          <!-- User Account Menu -->
       

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- search form (Optional) -->
     
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree" style="font-size: 16px">
      
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="index.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center" style="margin-top: 50px; margin-bottom: 20px;" >STUDENTS MISSING MARKS COMPLAINTS SYSTEM
      </h1>
      
    </section>
    <hr style="border:1.5px solid grey; margin-bottom:10px;  ">

    <!-- Main content -->
    <section class="content container-fluid">

        <div id="wrapperformLogin2">
                <?php  echo $error; ?>
            <form method="POST" action="studentLogin.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-25">
              <label id="labels">Username:</label><br>
              </div>
              <div class="col-75">
              <input id="inputs" type="text" name="regno" placeholder="Enter username" required=""><br><br>
               </div>
                </div>
                 <div class="row">
                  <div class="col-25">
              <label id="labels">Password:</label><br>
               </div>
                  <div class="col-75">
              <input id="inputs" type="password" name="password" placeholder="******" required=""><br><br>
                   </div>
                     </div>

                 <div class="row">
      
                      </div>   

              <input type="checkbox" name="keep">
              <label>Keep me logged in</label><br><br>
                 
                 <div class="sub"> 
              <input type="submit" name="submit" value="Log In">
                   </div>
                   <br>
        <p>Have  you not registered yet?<br><a href="student.php"><u>Create an account</u></a></p>

        <p style="margin-top: 10px;">Forgot your password!click<a onclick="return confirm('Please contact the Administrator.')" href="#"> <u><strong>here</strong></u></a></p>

            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      SMMCS
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Students Missing Marks Complain System</a>.</strong> All rights reserved.
  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>