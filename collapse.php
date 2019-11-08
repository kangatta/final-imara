<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
  <div class="row" style="margin-top:10px;">
    <table class="table table-bordered table-striped">
      <thead>
        
      </thead>
      <tbody>
        <?php
          
          include('connection.php');
          $query=mysqli_query($conn,"select * from protein order by rand() limit 3");
          while($row=mysqli_fetch_assoc($query))
          {
            echo '<input type="text" value='.$row['name'].'><br/>';
            }
            ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>