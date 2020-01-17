<?php

    function registration_exists($regNo, $con) 
    {
    	$result = mysqli_query ($con,"SELECT reg_No FROM student where reg_No='$regNo'");

    	if (mysqli_num_rows($result) ==1)
    	 {
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    function lecturer_exists($staff, $con) 
    {
        $result = mysqli_query ($con,"SELECT lpf_No FROM lecturer where lpf_No='$staff'");

        if (mysqli_num_rows($result) ==1)
         {
            return true;
        }
        else
        {
            return false;
        }
    }

    function dean_exists($staff, $con) 
    {
        $result = mysqli_query ($con,"SELECT dpf_No FROM dean where dpf_No='$staff'");

        if (mysqli_num_rows($result) ==1)
         {
            return true;
        }
        else
        {
            return false;
        }
    }
 function cod_exists($staff, $con) 
    {
        $result = mysqli_query ($con,"SELECT cpf_No FROM cod where cpf_No='$staff'");

        if (mysqli_num_rows($result) ==1)
         {
            return true;
        }
        else
        {
            return false;
        }
    }
     function regist_exists($staff, $con) 
    {
        $result = mysqli_query ($con,"SELECT rpf_No FROM registrar where rpf_No='$staff'");

        if (mysqli_num_rows($result) ==1)
         {
            return true;
        }
        else
        {
            return false;
        }
    }
   function logged_in()

    {
        if (isset($_SESSION['regno']))
         {
            return true;
        }
        else
        {
            return false;
        }
    }
   

 ?>