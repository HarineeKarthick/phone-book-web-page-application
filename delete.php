<!DOCTYPE html>
<html>
<body>
<?php
	$con=mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo 'not connected to server';
	}
	if(!mysqli_select_db($con,'contacts'))
	{
		echo 'Database not selected';
	}
	$id=$_GET['pid'];
	echo $id;
	$query=mysqli_query($con,"DELETE FROM info WHERE pid='$id'");
	if($query)
	{
		header("location:display.php");
	}	
	else
	{
		echo 'error';
	}
	

	

?>
</body>
</html>