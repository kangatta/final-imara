
<?php
include('connection.php');
$sql = "SELECT * FROM breakfast_protein order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al= ("Name: " . $row["quantity"].$row["name"]. "<br>");
              
            }
         } else {
            echo "0 results";
         }
         $sql = "SELECT * FROM breakfast_carbs order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al1= ("Name: " . $row["quantity"].$row["name"]. "<br>");
              
            }
         } else {
            echo "0 results";
         }
         $sql = "SELECT * FROM vitamins order by rand() limit 1";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $al2= ("Name: " . $row["quantity"].$row["name"]. "<br>");
              
            }
         } else {
            echo "0 results";
         }
         echo "$al";
         echo "$al1";
         echo "$al2";
?>
