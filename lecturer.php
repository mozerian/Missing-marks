<?php

include("connection.php");
include("function.php");
//include("raisecomplain.php");
//session_start();
?>




<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `studentcomplain` WHERE CONCAT(`course_Code`, `course_Name`, `yaer_Name`, `semester_Name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `studentcomplain`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
   $con = mysqli_connect("localhost", "root", "", "missing_marks_complaints");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
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
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="staff.css">
<style type="text/css">

  #wrapperformLogin6{
width: 70%;
    float: right;
padding: 12px;

  }

     #wrapperformLogin7{
width: 20%;
    float: left;
    margin-left: 10px;
  }
  table {
   
   width: 96%;
   color: #588c7e;
   font-family:Times New Romans;
   font-size: 19px;
   text-align: left;
   margin-left: 10px;
     } 
  th {
  
   background-color: teal;
   color: white;
    }
  tr:nth-child(odd) {background-color: #f2f2f2;}

@media screen and (max-width: 700px) {
  table {
    font-size:14px;
    width: 0 auto;
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
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--><li><a href="stafflogout.php">Log Out</a><!--<li>p-->
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
           <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <section class="content-header">
      <h1 align="center" style="margin-top: 50px; margin-bottom: 20px;" >STUDENTS MISSING MARKS COMPLAINTS SYSTEM
      </h1>
      <hr style="border:1.5px solid grey; margin: 0;  ">
      
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <form action="lecturer.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search" >
            <strong><input type="submit" name="search" value="Filter" style="padding: 6px;border-radius: 10px; width:100px; margin-left:20px; font-size: 19px; font-family:Times New Romans; font-weight: 5px;"></strong><br><br>
            
            <table>
                <tr> 
                    <th>Reg No.</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Semester</th>
                    <th>Year</th>
                    
                     <th><a href="lecturerApproval.php">Comment</a></th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row =mysqli_fetch_array($search_result)):?>
                <tr><td><?php echo $row['reg_No'];?></td>
                    <td><?php echo $row['course_Code'];?></td>
                    <td><?php echo $row['course_Name'];?></td>
                    <!--<td><?php echo $row['image'];?></td>-->
                    <td><?php echo $row['semester_Name'];?></td>
                    <td><?php echo $row['yaer_Name'];?></td>
                   
                     



                </tr>
                <?php endwhile;?>

            </table>
        </form>
        
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>