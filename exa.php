<?php
session_start();
?>

<html>
<head>
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form action="exa.php" method="post" >
<div class="col-lg-5 col-lg-offset-2">
<h2 style="text-align:center;"> Login</h2>
<label>Username</label>
<input class="form-control" type="text" name="username" required="" placeholder="username">
<br><br>
<label>Password</label>
<input class="form-control" type="password" name="password" required="" placeholder="password">
<br><br>
<button type="submit" name="login" value="login" class="btn btn-primary">LOGIN</button>
<br>
 <!--<h5>If you don't have an account...</h5><button><a href=http://localhost/webapp/register.php>REGISTER</a></button>-->
  </div>
 </form>
<?php


// Create connection
$conn = mysqli_connect("localhost","root","","csproject");

// Check connection
if ($conn)
{
   // echo "Success";
}
else
{
echo"failed";
}

//Query the database for user
if (isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from credentials where username='$username'";

$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
if($row['usertype']=='Admin')
{
$_SESSION["username"]=$username;
header("Location:home.php");
}
elseif($row['usertype']=='client'){
$_SESSION["username"]=$username;
header("Location:home.php");
}
    elseif($row['usertype']=='trainer'){
$_SESSION["username"]=$username;
header("Location:supplier.php");
}
}
}

?>
<body>
</html>
