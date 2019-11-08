
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

    <title>Meals</title>
    <style>
    body{

}
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
tr:nth-child(even){background-color: #555 ;}
    </style>
  </head>
    <body>
        <?php 
        //include ('sesh.php');
       include ('head3.php');

        ?>


<button type="button" class="collapsible" style="width:885px; margin-left: 250px;">VIEW RECOMMENDED MEALPLAN</button>
<div class="content" class="col-md-4" style="width:870px; margin-left: 250px;">
  
  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">BREAKFAST</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

         <div class="col-md-3">
        <div class="form-group"> 
          
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_breakprotein order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c1=$row['calories'];
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';

            }
            ?>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_breakcarbs order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
             $c2=$row['calories'];
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from fruits order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
             $c3=$row['calories'];
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3" style="margin-top: 172px;">
                
                <?php echo 'Breakfast calories';
                $sum= $c1+$c2+$c3;

                ?>
                 <input type="text"   class="form-control" name="total" value="<?php echo "$sum"?>">
               </div>
              </div>
            </div>
            <br><br>

        <!--lunch-->
          <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">LUNCH</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

          <div class="col-md-3">
        <div class="form-group">
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_protein order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c11=$row['calories'];
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_carbs order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c12=$row['calories'];
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from vitamins order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c13=$row['calories'];
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3" style="margin-top: 172px;">
                
                <?php echo 'Lunch calories';
                $sum2= $c11+$c12+$c13;

                ?>
                 <input type="text"   class="form-control" name="total" value="<?php echo "$sum2"?>">
               </div>
              </div>
            </div><br><br>

        <!--supper-->
  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">SUPPER</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">

          <div class="col-md-3">
        <div class="form-group">
          <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_protein order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c21=$row['calories'];
            echo 'Proteins<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
           
                <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from weight_carbs order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c22=$row['calories'];
            echo 'Carbohydrates<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
            <form method="POST">
            <input style="margin-left:40px; margin-top:25px;" type="submit" name="refresh" value="Alternative meal" class="btn btn-primary">
          </form>
                </div>
               </div>
               <div class="col-md-3">
          <div class="form-group">
           
                    <?php
          include('connection.php');
          $query=mysqli_query($conn,"select * from fruits order by rand() limit 1");
          while($row=mysqli_fetch_array($query))
          {
            $c23=$row['calories'];
            echo 'Fruit/vegetable<br><input type="text" class="form-control" value='.$row['name'].'><br/>';
            echo 'Quantity<br> <input type="text" class="form-control" value='.$row['quantity'].'><br/>';
            echo 'Calories<br> <input type="text" class="form-control" value='.$row['calories'].'><br/>';
            }
            ?>
                </div>
               </div>
               <div class="col-md-3" style="margin-top: 172px;">
                
                <?php echo 'Supper calories';
                $sum3= $c21+$c22+$c23;

                ?>
                 <input type="text"   class="form-control" name="total" value="<?php echo "$sum3"?>">
                 <br>
                  <?php echo 'Total calories';
                $sum4= $sum+$sum2+$sum3;

                ?>
                 <input type="text"   class="form-control" name="total" value="<?php echo "$sum4"?>">
                 <br>
               </div>
               <div class="col-md-3">
                
               
               </div>
              </div>
            </div><br><br>
            </div><br><br>
          </div>
<button type="button" class="collapsible" style="width:885px; margin-left: 250px;">CUSTOMIZE YOUR MEALPLAN</button>
<div class="content" class="col-md-4" style="width:885px; margin-left: 250px; ">

  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">View Chosen Meals</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
  <div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:9px; box-shadow: 10px 10px 8px #888888; background-color: white;">
    <div style="overflow: scroll; height:450px; width:100%;">
    <h3 style="margin-left: 20px;">Breakfast</h3>
      <div style="overflow: scroll; height:150px; width:100%;">
      <table style="border-collapse: collapse; width:100%; color: #d96459; font-family: monospace; font-size: 20px; text-align: left; margin-left: 25px; ">
        <tr>
        <th style="background-color: #777; color:white;">Protein</th>
        <th style="background-color: #777; color:white;">Carbohydrate</th>
        <th style="background-color: #777; color:white;">Vitamins</th>
      </tr>
      <?php 
      $query="SELECT `protein`, `carbs`, `vitamins` FROM `slim_mealplan` WHERE `meal`= 'break'";
      $res=$conn->query($query);
       if($res-> num_rows > 0)
       {
        while($row=$res->fetch_assoc())
        {
          echo "<tr><td>".$row["protein"]."</td><td>".$row["carbs"]."</td><td>".$row["vitamins"]."</td></tr>";
        }
        echo "</table>";
       }
       else
       {
        echo "0 result";
       }
      ?>
      </table>
      <div>
  </div>
</div>
<br>
<h3 style="margin-left: 20px;">Lunch</h3>
      <div style="overflow: scroll; height:150px; width:100%;">
      <table style="border-collapse: collapse; width:100%; color: #d96459; font-family: monospace; font-size: 20px; text-align: left; margin-left: 25px; ">
        <tr>
        <th style="background-color: #777; color:white;">Protein</th>
        <th style="background-color: #777; color:white;">Carbohydrate</th>
        <th style="background-color: #777; color:white;">Vitamins</th>
      </tr>
      <?php 
      $query="SELECT `protein`, `carbs`, `vitamins` FROM `slim_mealplan` WHERE `meal`= 'lunch'";
      $res=$conn->query($query);
       if($res-> num_rows > 0)
       {
        while($row=$res->fetch_assoc())
        {
          echo "<tr><td>".$row["protein"]."</td><td>".$row["carbs"]."</td><td>".$row["vitamins"]."</td></tr>";
        }
        echo "</table>";
       }
       else
       {
        echo "0 result";
       }
      ?>
      </table>
      <div>
  </div>
</div>
<br>
<h3 style="margin-left: 20px;">Supper</h3>
      <div style="overflow: scroll; height:150px; width:100%;">
      <table style="border-collapse: collapse; width:100%; color: #d96459; font-family: monospace; font-size: 20px; text-align: left; margin-left: 25px; ">
        <tr>
        <th style="background-color: #777; color:white;">Protein</th>
        <th style="background-color: #777; color:white;">Carbohydrate</th>
        <th style="background-color: #777; color:white;">Vitamins</th>
      </tr>
      <?php 
      $query="SELECT `protein`, `carbs`, `vitamins` FROM `slim_mealplan` WHERE `meal`= 'supper'";
      $res=$conn->query($query);
       if($res-> num_rows > 0)
       {
        while($row=$res->fetch_assoc())
        {
          echo "<tr><td>".$row["protein"]."</td><td>".$row["carbs"]."</td><td>".$row["vitamins"]."</td></tr>";
        }
        echo "</table>";
       }
       else
       {
        echo "0 result";
       }
      ?>
      </table>
      <div>
  </div>
</div><br><br><br>
</div>
  <br><br>
  </div><br>
</div><br><br>
  <button type="button" class="collapsible" style="width:850px; margin-left:0px; margin-right: 5px;">Choose New Meal</button>
    <div class="content" class="col-md-4" style="width:850px; margin-left: 0px;">
<div class="row" style="border:.0px solid; border-radius:5px; margin-top: 50px; height:cover; width:800px; float:center; margin-left:25px; box-shadow: 10px 10px 8px #888888; background-color: white;">

           <form method="POST" action="weightloss.php" class="row">
            <?php
            require('connection.php');
            $query="SELECT * FROM `weight_breakprotein`";
            $res=mysqli_query($conn, $query);
            $space=" ";
            $cal=" calories";
            $meal="breakfast";
             ?>

                <div class="col-md-4">
        <div class="form-group">
                <h2>Breakfast</h2>
                <label for="name">Proteins</label>
                <select  name="breakprotein" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1]/*, $space, $row1[3], $cal*/;?></option>
              <?php endwhile;?>
              </select>
                
                </div>
               </div>
               
               <?php
            $query="SELECT * FROM `weight_breakcarbs`";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Carbohydrates</label>
                <select name="breakcarbs" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

                 <?php
            $query="SELECT * FROM `fruits`";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Vitamins</label>
                <select name="breakvits" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
        <!---->
        <?php
            $query="SELECT * FROM `weight_protein`";
            $res=mysqli_query($conn, $query);
             ?>
                <div class="col-md-4">
        <div class="form-group">
                <h2>Lunch</h2>
                <label for="name">Proteins</label>
                <select name="lunchprotein" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
                 
                 <?php
            $query="SELECT * FROM `weight_carbs` ";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Carbohydrates</label>
                <select name="lunchcarbs" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

               <?php
            $query="SELECT * FROM `vitamins`";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Vitamins</label>
                <select name="lunchvits" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
        
        <!---->

         <?php
            $query="SELECT * FROM `weight_protein`";
            $res=mysqli_query($conn, $query);
             ?>
                <div class="col-md-4">
        <div class="form-group">
                <h2>Supper</h2>
                <label for="name">Proteins</label>
                <select name="supperprotein" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>
                 
                 <?php
            $query="SELECT * FROM `weight_carbs`";
            $res=mysqli_query($conn, $query);
             ?>
                 <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Carbohydrates</label>
                <select name="suppercarbs" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div>

               <?php
            $query="SELECT * FROM `vitamins`";
            $res=mysqli_query($conn, $query);
             ?>
               <div class="col-md-4">
          <div class="form-group">
            <br><br>
                <label for="name">Vitamins</label>
                <select name="suppervits" class="form-control"><?php while($row1=mysqli_fetch_array($res)):;?>
                <option><?php echo $row1[2], $space, $row1[1];?></option>
              <?php endwhile;?>
              </select>
                </div>
               </div><br><br>
        <div class="col-md-4">
            <input type="submit" name="submit" value="save" class="btn btn-primary" style="margin-left: 300px; width:150px;">
          </div><br><br>
        </form>

            <?php 
            if(isset($_POST['submit']) && !empty($_POST['submit']))
            { 
             $break="break";
             $breakprotein=$_POST['breakprotein'];
             $breakcarbs=$_POST['breakcarbs'];
             $breakvits=$_POST['breakvits'];

             $lunch="lunch";
             $lunchprotein=$_POST['lunchprotein'];
             $lunchcarbs=$_POST['lunchcarbs'];
             $lunchvits=$_POST['lunchvits'];

             $supper="supper";
             $supperprotein=$_POST['supperprotein'];
             $suppercarbs=$_POST['suppercarbs'];
             $suppervits=$_POST['suppervits'];

             //insert query
             $query="INSERT INTO `slim_mealplan`(`meal`, `protein`, `carbs`, `vitamins`)
                          VALUES ('$break','$breakprotein','$breakcarbs','$breakvits'),
                                 ('$lunch','$lunchprotein','$lunchcarbs','$lunchvits'),
                                 ('$supper','$supperprotein','$suppercarbs','$suppervits')";
             if(mysqli_query($conn, $query))
             {
               echo "New record created";
             }
             else
             {
               echo "Error:".$query. "<br>".mysqli_error($conn);
             }
            }
            ?>
                </div><br><br>
              </div>
            </div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


</body>

</html>
