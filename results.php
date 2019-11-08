<?php 
session_start();
$bmi=$_SESSION['cake'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>
    <style>
              body{
    background-image: url(slim.jpg);
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    font-color: white;
}
    </style>
  </head>
    <body style="background-image: url(slim.jpg); background-image: cover; background:no repeat;">
        <?php 
        //include ('sesh.php');
       include ('head.php');
        ?>
        <!--left half-->
      <div class="row">

        <div class="col-md-4" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:100%; margin-left:100px; box-shadow: 10px 10px 8px #888888; background-color: white;">
         <div class="form-group">
          <?php
if ($bmi<2)
            {
              
              echo "Status:<br>
              <input class='form-control' type='text' value=' '/> <br>";
              echo "Recommended package:<br>
              <input class='form-control' type='text' value=' '/>";

            }
            elseif($bmi<18)
            {
              echo "BMI score:<br>
              <input class='form-control' type='text' value='$bmi'/> <br>";
              echo "Status:<br>
              <input class='form-control' type='text' value='You are underweight'/><br><br>";
              echo "Recommended package:<br>
              <input class='form-control' type='text' value='*Currently not available*'/><br><br>";
              echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='You are underweight'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='*Currently not available*'/>";

            }
          elseif($bmi>=18.5 && $bmi<=25.5)
          {
            echo "BMI score:<br>
            <input type='text' class='form-control' value='$bmi'/> <br>";
            echo "Status:<br>
            <input type='text' value='You are healthy'/> <br><br>";
            echo "Recommended package:<br>
            <input type='text' value='Fitness Package'/><br><br>";
            echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='6 Weeks'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='2500 Calories'/>";
              
          }
          else
          {
            echo "BMI score:<br>
            <input type='text' value='$bmi'/> <br>";
            echo "Status:<br>
            <input type='text' value='You are overweight'/> <br><br>";
            echo "Recommended package:<br>
            <input type='text' value='Weight-loss Package'/><br><br>";
            echo "Estimated Duration:<br>
              <input class='form-control' type='text' value='6 Weeks'/><br>";
              echo "Required Calories:<br>
              <input class='form-control' type='text' value='2000 Calories'/>";

          }
?>
<form action="" method="POST">
   <div>
          <br>
           <center><button class="btn btn-primary"  type="submit" name="action" >View Package</button></center><br>
           <?php 
           if(isset($_POST['action']))
           {
            if($bmi>=18.5 && $bmi<=25.5)
            {
              header("Location:maintain.php");
                exit();
            }
            else
            {
                header("Location:weightloss.php");
                exit();
            }
           }
           ?>
         </div>
</form>
          
        </div>  
      </div> 
      </div><br>
    </body>
</html>