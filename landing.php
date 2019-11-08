    <?php 
    session_start();
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
	  body{
	background-image: url(slim.jpg);
	height: 500px;
  	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;
  	position: relative;
  	font-color: white;
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
  <link href="l2.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-image: url(slim.jpg); background-image: cover; background:no repeat;">
    <?php 
    //include('sesh.php');
    include('head.php');?>
 <br><br>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main role="main" class="inner cover" style="font-color: white;">
        <h1 class="cover-heading" style="color:black">A dietary guide to weight-loss and fitness</h1>
        <p class="lead" style="color:black; "><b>You gain by lossing.</b></p><br><br><br><br>
        <p class="lead">
          <a href="registration.php" class="btn btn-lg btn-secondary" style="background-color:transparent; border:3px solid; border-color:black; color:black; width:15%"><b>Join us</b></a>
        </p>
        <p class="lead">
          <a href="exa.php" class="btn btn-lg btn-secondary" style="background-color:transparent; border:3px solid; border-color:black; color:black; width:15%;"><b>Sign in</b></a>
        </p>
		
      </main>
      <br>
      <?php 
        //include('footer.php');
      ?>
