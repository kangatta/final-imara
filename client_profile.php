
<?php 
session_start();

?>
<!DOCTYPE html>
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
        <div class="col-md-4" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:100%; margin-left:450px; box-shadow: 10px 10px 8px #888888; background-color: white;">
          <form action=" " method="POST" target="_blank">
            <center><h3>BMI Counter</h3></center>
          <div class="form-group">
           <label for="name">Age</label>
           <input class="form-control" name="age"  type="text" required=" ">
         </div>
         <div class="form-group">
           <label for="email">Height(cm)</label>
           <input class="form-control" name="height" type="text" required=" ">
         </div>
         <div class="form-group">
           <label for="username">Mass(kg)</label>
           <input class="form-control" name="mass"  type="text" required=" ">
         </div>
         <div class="form-group">
           <label for="usertype">Activity rate</label>
           <select class="form-control "id="usertype" name="usertype" type="text">
             <option value="little">little</option>
             <option value="moderate">moderate</option>
             <option value="intensive">intensive</option>
           </select>
         </div>
         
        <div>
          <br>
           <center><button class="btn btn-primary"  type="submit" name="submit">Calculate</button></center><br>
           </div>
           
           <?php
       $bmi='';
        if(isset($_POST['submit']))
        {
          $h=$_POST['height'];
          $m=$_POST['mass'];
         
            //calculator
            if($h!='')
            {
              $bmi1=($m/($h*$h))*10000;
              $bmi=(round($bmi1, 2));
            }
            echo "BMI score:<br>
              <input class='form-control' type='text' value='$bmi'/> <br>";
              $_SESSION['cake']="$bmi";
        }
           ?>
           <a href="results.php" title="">Check your BMI status</a>
           
        </form>
        </div>  
            
      </div><br><br><br><br><br>
       <?php 
        include('footer.php');
      ?>
    </body>
</html>