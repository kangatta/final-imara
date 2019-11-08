<?php
session_start()

?>
<?php
include('connection.php');
$kan=" ";
$sql = "SELECT `phone` FROM `credentials` WHERE username = '{$_SESSION['username']}'";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $no= ("Phone no: " . $row["phone"]. "<br>");
              
            }
         } else {
            echo "0 results";
         }

         $sql = "SELECT * FROM breakfast_protein order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al= ("Protein: " . $row["quantity"].$row["name"]);
              
            }
         } else {
            echo "0 results";
         }
         $sql = "SELECT * FROM breakfast_carbs order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al1= ("Carbohydrate: " . $row["quantity"].$row["name"]);
              
            }
         } else {
            echo "0 results";
         }
         $sql = "SELECT * FROM vitamins order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al2= ("Vitamins: " . $row["quantity"].$row["name"]);
              
            }
         } else {
            echo "0 results";
         }
         echo $al;
         echo $al2;
         echo $al1;


?>
<?php
/*
require 'C:\xampp\htdocs\cs\vendor\autoload.php';

$MessageBird = new \MessageBird\Client('3haZ3aH7b0aWmcaYuJyMh826K');
$Message = new \MessageBird\Objects\Message();
$Message->originator = +254706066626;
$Message->recipients = array(''.$no.'');
$Message->body = 'Hello ';

$MessageBird->messages->create($Message);*/
?> 