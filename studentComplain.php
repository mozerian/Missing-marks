 <?php
 session_start();
 include("connection.php");
include ("function.php");
//$_SESSION['reg_No']= "$regNo"
$regno =$_SESSION ['reg_No'];

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


  </style>
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper"
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
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--><li><a href="#"><li>
              <i<a href="#" class="fa fa-envelope-o">
              </i<a>
          
    
    <li><a href="logout.php">Log Out</a>
    	<li><a href="helpp.php">Help</a>
               
          </li>
        </ul>
      </div>
    </nav>
          <!-- User Account Menu -->
       

  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less --><div class="user-panel">
        <div class="pull-left image">
          <img src="images/student.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p >

          </p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Moses Njoroge</a>
        </div>
      </div>
    <section class="sidebar">


      <!-- search form (Optional) -->
     
      <!-- Sidebar Menu -->
      
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center" style="margin-top: 40px; margin-bottom: 20px;">STUDENTS MISSING MARKS COMPLAINTS SYSTEM
      </h1>
      
    </section>
      <hr style="border:1.5px solid grey; margin: 0;  ">
    <!-- Main content -->
    <section class="content container-fluid">
    <style type="text/css">
      #button
      {
        margin: 50px;
        margin-top: 0;
        border: 2px solid grey; 
        border-radius: 5px;

      }
      #as{
        font-size: 19px;
        text-decoration: bold;
      }
    </style>
     <button id="button"><a id="as" href="viewcomplain.php"><span>View Complaints</span></a></button>

     <button id="button"><a id="as" href="raisecomplain.php"><span>Raise Complaints</span></a></button>
     <p>
      <a href=""></a>
     
 
     </p>
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