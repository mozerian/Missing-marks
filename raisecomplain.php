<?php
session_start();
 include("connection.php");
include ("function.php");
//$regno =$_SESSION ['reg_No'];
 /*
 if (isset($_SESSION ['reg_No']))

{ 
   $regno =$_SESSION ['reg_No'];
 
 }
 else
 {
   header("location:studentLogin.php");

 }*/

  $error="";

  ?>
  <?php
    if (empty($_POST)===false) 
    {
       $regno=$_POST['regno'];
       $courseCode=$_POST['courseCode'];
       $courseName=$_POST['courseName'];
       $year=$_POST['year'];
       $semesterName=$_POST['semesterName'];
       $lecturerName=$_POST['lecturerName'];
       
       $image=$_FILES['image']['name'];
       $tmp_image =$_FILES['image']['tmp_name'];
      // $tmp_im age =$_FILES['image']['size'];
       


       $insert=("INSERT INTO studentcomplain(reg_No,course_Code,course_Name,yaer_Name,semester_Name,lecturer_Name,image) VALUES ('$regno','$courseCode','$courseName','$year','$semesterName','$lecturerName','$image')");
/*   
        $sql = "CREATE TRIGGER 'lectrigger' AFTER INSERT ON 'studentcomplain';
      
      FOR EACH ROW 
      BEGIN 

      INSERT INTO 'lecturercomplains'(reg_No,course_Code,course_Name,yaer_Name,semester_Name,lecturer_Name) VALUES ('new.$regno','new.$courseCode','new.$courseName','new.$year','new.$semesterName','new.$lecturerName'));
      END";
      //INSERT INTO  lecturercomplains VALUES(new.reg_No,new.course_Code,new.course_Name,new.yaer_Name,new.semester_Name,new.lecturer_Name)
  */
      $query=mysqli_query($con,$insert) or die (mysqli_error($con));
      if ($query==1) 
      {
        $ins=("INSERT INTO lecturercomplains(reg_No,course_Code,course_Name,yaer_Name,semester_Name,lecturer_Name) VALUES ('$regno','$courseCode','$courseName','$year','$semesterName','$lecturerName')");

        $query=mysqli_query($con,$ins) or die(mysqli_error($con));
        if ($query==1)
         {
          

          if (move_uploaded_file($tmp_image,"images/$image"))
           {
            # code..
        //  $error="sucessful";

           ?> <script>alert <?php $error?>('you have successfully raised the complain!')</script>

      <?php
        }
        else
        {
         // $error="failed";
           ?> <script>alert <?php $error?>('failed to raise the complain! please try again')</script>";
      <?php
        }
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
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">

  #wrapperformLogin2{
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
  
  border-color: grey;
  padding: 10px;
  width: 49.5%;

  float: right;
  margin-top: 10px
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
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--><li><a href="#"><li>
              <li><a href="logout.php">Log Out</a>

          
    
    <li><a href="#">Help</a>
               
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


    <!-- Main content -->
    <section class="content container-fluid">
     <div id="wrapperformLogin2">
          <?php   echo $error;?>
              
            <form method="POST" action="raisecomplain.php" enctype="multipart/form-data">
                
              <label id="labels">Reg No:</label>
                 
              <select name="regno" required="">
                     <option>                     <?php
                      global $con;
                      $regno =$_SESSION ['reg_No'];
                  $get_reg="select * from student where reg_No='$regno'";
                 $run_reg=mysqli_query($con,$get_reg);
                 while($row=mysqli_fetch_array($run_reg))

             {

                $sem=$row['reg_No'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>     

              <label id="labels">Course Code:</label>
                
                 <select name="courseCode" required="">
                     <option>                     <?php global $con;
                  $get_cod="select * from course ORDER BY course_Code ASC";
                 $run_cod=mysqli_query($con,$get_cod);
                 while($row=mysqli_fetch_array($run_cod))

             {

                $sem=$row['course_Code'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>     
              <label id="labels">Course Title:</label>
                 
                <select name="courseName" required="">
                 <option>
  
                     <?php global $con;
                  $get_cos="select * from course ORDER BY course_Name ASC";
                 $run_cos=mysqli_query($con,$get_cos);
                 while($row=mysqli_fetch_array($run_cos))

             {

                $sem=$row['course_Name'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>
                   
              <label id="labels">Year Of Study:</label>
             <select name="year" required="">
                 <option>
  
                     <?php global $con;
                  $get_year="select * from year ORDER BY yaer_Name ASC";
                 $run_year=mysqli_query($con,$get_year);
                 while($row=mysqli_fetch_array($run_year))

             {

                $sem=$row['yaer_Name'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>

              <label id="labels">Semester</label>
             
              <select name="semesterName" required="">
                 <option>
  
                     <?php global $con;
                  $get_sem="select * from semester";
                 $run_sem=mysqli_query($con,$get_sem);
                 while($row=mysqli_fetch_array($run_sem))

             {

                $sem=$row['semester_Name'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>

              <label id="labels">Lecturer Name</label>
             
              <select name="lecturerName" required="">
                 <option>
  
                     <?php global $con;
                  $get_lec="select * from lecturer ORDER BY fname ASC";
                 $run_lec=mysqli_query($con,$get_lec);
                 while($row=mysqli_fetch_array($run_lec))

             {

                $sem=$row['fname'];

                echo"<option>$sem</option>";

              } ?></option></select><br><br>
             
             
            </div>

            <div id="wrapperformLogin3">
                
         <label style="vertical-align: top;">Image of the exam card:</label>
         <input type="file" name="image">
         <br>
         <br>
         <br>
          
           <label style="vertical-align: top; ">Image of CAT:</label>
            <input type="file" name="cat">
        
           <input type="submit" name="submit">
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