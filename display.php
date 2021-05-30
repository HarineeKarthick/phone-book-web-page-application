<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
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
	$sql="SELECT * FROM info";
	$res=mysqli_query($con,$sql);
	if(!$res)
	{
		echo 'Sorry error exists';
	}
	else
	{
		echo 'Contacts List';
		echo '</br></br></br></br></br>';
		echo '<table style="width=100%">';
		echo '<tr>';
		echo '<td>S.I</td>';
		echo '<td>NAME</td>';
		echo '<td>MOBILE</td>';
		echo '<td>EMAILID</td>';
		echo '<td>DOB</td>';
		echo '</tr>';
		while($row=mysqli_fetch_array($res))
		{
			echo '<tr>';
			echo '<td>'.$row['pid'].'</td>';
			echo '<td>'.$row['pname'].'</td>';
			echo '<td>'.$row['mobile'].'</td>';
			echo '<td>'.$row['emailid'].'</td>';
			echo '<td>'.$row['dob'].'</td>';
			echo "<td><a href=\"edit.php?pid=$row[pid]\"><input type='submit' value='update'></a>";
			echo "<td><a href=\"delete.php?pid=$row[pid]\"><input type='submit' value='delete'></a>";
			echo '</tr>';
		}
		echo '</table>';
		
	}

?>	
</br></br></br></br></br>
<form action="form.php">
	<input type="submit" name="Goto home page" value="home"></br></br>
</form>
</body>
</html>