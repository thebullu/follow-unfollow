<?php
$servername="localhost";
$username="root";
$password="mysql";
$dbname="user";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "Connection Ok";

}
else
{
	die("connection failed".mysqli_connect_error());
}
?>