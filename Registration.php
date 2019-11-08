<!--
Into this file, we create a layout for registration page.
-->

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="fullname">Full Name:</label>
    <div class="col-sm-6">
      <input type="text" name="fullname" class="form-control" id="firstname" placeholder="Enter Full name">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-6">
      <input type="text" name="username" class="form-control" id="lastname" placeholder="Enter username">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="usertype">Usertype:</label>
    <div class="col-sm-6">
                <select class="form-control "id="usertype" name="usertype" type="text">
             <option value="admin">Admin</option>
             <option value="trainer">Trainer</option>
             <option value="client">Client</option>
           </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
    <div class="col-sm-6"> 
      <input type="text" name="phone" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>