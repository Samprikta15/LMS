<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
	die('unable to find server');
$db=mysqli_select_db($con,'lms2');
if(!$db)
	die('unable to find database');

?>  