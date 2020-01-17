<?php
   
$servername="localhost";
$username="root";
$password=" ";
$dbname="missing_marks_complaints";
 $con=mysqli_connect("localhost","root","","missing_marks_complaints");
if(mysqli_connect_error())
{
	echo "connection failed;".mysqli_connect_error();

}
else
{

//echo "logged in";
}

?>
