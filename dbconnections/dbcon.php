<?php 
$hostname ="localhost";
$username ="root";
$password ="";
$db_name  ="innovative";
$con = mysqli_connect($hostname,$username,$password);
if(!$con)
{
	die('connection failed'.mysqli_error());
}
mysqli_select_db($con,$db_name);

 ?>