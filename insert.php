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
	$Name=$_POST['Name'];
	$Name=strtolower($Name);
	$Mobile=$_POST['Phone'];
	$Email=$_POST['Email'];
	$Dob=$_POST['DOB'];
	$Dob=strtolower($Dob);
	$sql="INSERT INTO info(pid,pname,mobile,emailid,dob)VALUES('','$Name','$Mobile','$Email','$Dob')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
		header("location:form.php");
	}

?>	
