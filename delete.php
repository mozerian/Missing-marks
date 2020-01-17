<?php
session_start();
include("connection.php");
include("function.php");



$ID=1;
deleteRecord($con, $ID);

?>
