<?php 
define('CON', 'dbconnections/');
require_once(CON."dbcon.php");
// $var = "<script>alert('Hello);</script>";

// print htmlentities($var);
$var1 =" <script>alert('Hello);</script>";
$var1 =  mysqli_real_escape_string($con,$var1);
echo $var1;
 

 ?>