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
	$query=mysqli_query($con,"SELECT* FROM info WHERE pid=$id");
	if($query)
	{
		echo 'selected';
	}	
	else
	{
		echo 'error';
	}
	while($row=mysqli_fetch_array($query))
	{
		$name=$row['pname'];
		$mobile=$row['mobile'];
		$email=$row['emailid'];
		$dob=$row['dob'];
	}
	
	if(isset($_POST['update']))
	{
		//$id=$_POST['pid'];
		$name=$_POST['name'];
		$mobile=$_POST['phone'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$query=mysqli_query($con,"UPDATE info SET pname='$name',mobile='$mobile',emailid='$email',dob='$dob' WHERE pid='$id'");
		if($query)
		{
			header("location:display.php");
		}	
		else
		{
			echo 'error';
		}
	}

	

?>

	<form align="center" action="" method="POST">
		Name</br><input type="text" name="name" value="<?php echo $name; ?>"></br></br>
		Phone</br><input type="mobile" name="phone" value="<?php echo $mobile; ?>"></br></br>
		Email</br><input type="email" name="email" value="<?php echo $email; ?>"></br></br>
		DOB</br><input type="text" name="dob" value="<?php echo $dob; ?>"></br></br>
		<input type="submit" name="update" value="update"></br></br>
	</form>	
</body>
</html>