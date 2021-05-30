<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.mobile-container {
  max-width: 480px;
  margin: auto;
  background-color:LimeGreen;
  height: 500px;
  color: white;
  border-radius: 10px;
}

</style>
</head>

<body>
<div class="mobile-container">
<div style="padding-left:125px">
<h1>PHONE BOOK</h1>
</div>

<div class="mobile-container"> 
</br></br>
<form align="center" action="display.php">
    <input type="submit" value="Click Here To View / Update / Delete Your Contact Information" /></br></br>
</form>

</br></br>
<h4 align="center">WANT TO INSERT CONTACT INFO?</h4>
</br>
<form align="center" action="insert.php" method="POST">
	Name</br><input type="text" name="Name"></br></br>
	Phone</br><input type="mobile" name="Phone"></br></br>
	Email</br><input type="email" name="Email"></br></br>
	DOB</br><input type="text" name="DOB"></br></br>
	<input type="submit" name="insert" value="insert"></br></br>
</form>
</div>

</body>

</html>
