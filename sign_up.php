<html>
<body >
<center>
<div class="container">
<div class="login">
<?php
include('connect.php');
$sql="insert into registration values('".$_REQUEST['fname']."',".$_REQUEST['roll'].",".$_REQUEST['ph'].",'".$_REQUEST['email']."','".$_REQUEST['password']."')";
$rs=mysqli_query($con,$sql);
if(!$rs)
	die('Data not inserted');
echo "<br> <br> Registration Successfull<br> <br/>"
?>
<button type="button" ><a href="sign_up.php">OK</a></button>
<button type="button" ><a href="index.php">Home</a></button>

<?php
mysqli_close($con);
?>
</center>
</body>
</html> 
