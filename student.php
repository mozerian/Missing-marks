<?php 
  include("connection.php");
 include("function.php");
  $error ="";
   
if (empty($_POST)===false)
{

  $regNo = $_POST['regno'];
  $firstName= $_POST['fname'];
  $lastName = $_POST['lname'];
  $phoneNumber= $_POST['phone'];
  $password = $_POST['password'];
  $passwordConfirm = $_POST['passwordcon'];
 $faculty= $_POST['faculty'];
  $department=$_POST['department'];


  if (strlen($firstName) < 3)
   {
    $error="first name is too short";
  }
  else if (strlen($lastName) < 3 )
  {
    $error="last name is too short";
  }
  else if(strlen($password) < 4 )
  {
    $error=" password os too  short";
  }
  elseif ($password !== $passwordConfirm) 
  {
    $error="password does not match";
  }
  else
  {
    $insertQuery ="INSERT INTO student(reg_No,fname,lname,phone_Number,password,department_Code,faculty_Code) VALUES ('$regNo','$firstName','$lastName','$phoneNumber','$password','$department','$faculty')";
    if(mysqli_query($con, $insertQuery))
    {
      //$error="sucess";
      ?> <script>alert <?php $error?>('you have successfully registered,please log in')</script>
      <?php
    }
    else{
      //$error="failed";
      ?> <script>alert <?php $error?>('failed to register!please try again')</script>
      <?php
    }
  }

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
<link rel="stylesheet" type="text/css" href="styles.css">
<style type="text/css">
#wrapperformLogin2{
  height: 460px;
  border-radius: 5px;
  border: solid;
  background-color: #f2f2f2;
  border-color: grey;
  padding: 10px;
  width: 49.5%;
  margin-top: 10px;
  float: left;}

  #wrapperformLogin3{
  border-radius: 5px;
  background-color: #f2f2f2;
  border:solid;
  height: 460px;
  border-color: grey;
  padding: 10px;
  width: 49.5%;

  float: right;
  margin-top: 10px

}
input[type=text], select{
  width: 100%;
  padding: 7px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  resize: vertical;

}
input[type=password], select{
  width: 100%;
  padding: 7px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  resize: vertical;

}
/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:40%;
 
}


@media screen and (max-width: 700px) {
  #wrapperformLogin2,#wrapperformLogin3 {
    width: 100%;
    margin-top: 2px;
    height: auto;

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
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--><li><a href="studentLogin.php">Log In</a><!--<li>p-->
              <!--<i class="fa fa-envelope-o"></i>-->
          

    <li><a href="#">Help</a>
               
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
        <li><a href="student.php"><i class="fa fa-link"></i> <span>Register</span></a></li>
        
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

    <!-- Main content -->
    <section class="content container-fluid">

        <div id="wrapperformLogin2">
          <?php   echo $error;?>
              
            <form method="POST" action="student.php" enctype="multipart/form-data">
                
              <label id="labels">Reg No:</label>
              <input id="inputs" type="text" name="regno" placeholder="Enter registration number" required="">

              <label id="labels">First Name:</label>
                
              <input id="inputs" type="text" name="fname" placeholder="Enter first name" required="">
    
              <label id="labels">Last Name:</label>
                 
              <input id="inputs" type="text" name="lname" placeholder="Enter last name" required="">
                   
             <label id="labels">Phone Number:</label>

              <input id="inputs" type="text" name="phone" placeholder="Enter phone number" required="">
            </div>
          <div id="wrapperformLogin3"> 
              <label id="labels">password:</label>
                  
              <input id="inputs" type="password" name="password" placeholder="******" required="">
                    
                    
              <label id="labels">Password Confirm:</label>
            
              <input id="inputs" type="password" name="passwordcon" placeholder="******" required="">
           
                   
              <label id="labels">Faculty</label>
                    
                 <select name="faculty" required=""  >
                 </option >
  
                     <?php global $con;
                  $get_fac="select * from faculty ORDER BY faculty_code ASC";
                 $run_fac=mysqli_query($con,$get_fac);
                 while($row=mysqli_fetch_array($run_fac))

             {

                $sem=$row['faculty_Code'];

                echo"<option>$sem</option>";

              } ?></option></select>
           

              <label id="labels">Department</label>
              
               <select name="department" required="">
                 </option>
  
                     <?php global $con;
                  $get_fac="select * from department ORDER BY department_Code ASC";
                 $run_fac=mysqli_query($con,$get_fac);
                 while($row=mysqli_fetch_array($run_fac))

             {

                $sem=$row['department_Code'];

                echo"<option>$sem</option>";

              } ?></option>></select>
              
              <input type="submit" name="submit">

              <p style="margin-top: 10px;">Successfully Created an account?<a href="studentLogin.php"> <u><strong>Log In</strong></u></a></p>
             
            </div>
            </form>
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