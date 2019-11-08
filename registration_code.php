<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fullname = $email = $username = $password = $pwd = $type = $phone = '';

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
//$password = MD5($pwd);
$type = $_POST['usertype'];
$phone = $_POST['phone'];

$sql = "INSERT INTO credentials (fullname,email,username,password,usertype,phone) VALUES ('$fullname','$email','$username','$password','$type','$phone')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: exa.php");
}
else
{
	echo "Error :".$sql;
}
?>