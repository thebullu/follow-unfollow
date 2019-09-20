<?php
include("connection.php");
error_reporting(0);
?>

<?php
if(isset($_POST['submit']))
{
	echo "Hello {$_POST['new_user']}";
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="GET" action="">
		User_ID <input name="userid" type="text"/>
		User_name <input name="newuser" type="text"/>
		<input type="submit" name="submit" value="Hop in"/>
	</form>

<?php

$ud=$_GET['userid'];
$un=$_GET['newuser'];

$query = "INSERT INTO hellousers VALUES ('$ud','$un')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "Data inserted into Database";
}
	
?>



</body>
</html>
