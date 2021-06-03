<?php session_start();
	if(!isset($_SESSION['UserData']['Username'])){
		header("location:login");
	exit;
	}
?>

<!doctype html>
<html lang="en">

<head>

<title>easy-php-login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">

<link href="scripts/style.css" rel="stylesheet">
<link href="images/favicon.png" rel="icon" type="image/png" >
<link href="images/favicon.png" rel="apple-touch-icon" >

    <!-- remove this to remove the random bg function -->
	<?php
    $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg' );

    $i = rand(0, count($bg)-1); 
    $selectedBg = "$bg[$i]"; 
    ?>

    <style type="text/css">
    body {
    background: url(images/backgrounds/<?php echo $selectedBg; ?>) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    animation:fadein 2.0s;-moz-animation:fadein 2.0s;-webkit-animation:fadein 2.0s;
    }
    </style>
	<!-- end of the random bg function -->
 
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

	<div class="collapse navbar-collapse" id="navbarColor02">
	<ul class="navbar-nav mr-auto">

	<li class="nav-item">
	<a class="nav-link active" href="dashboard">DASHBOARD <span class="sr-only">(current)</span></a>
	</li>

	<li class="nav-item">
	<a class="nav-link" href="link">LINK</a>
	</li>

	<li class="nav-item">
	<a class="nav-link" href="link">LINK</a>
	</li>

	</ul>    
	</div>

	<div class="collapse navbar-collapse" id="navbarColor02">
	<ul class="navbar-nav ml-auto">

	<a href="logout" type="button" class="btn btn-outline-warning">Logout</a>

	</ul>    
	</div>

</nav>

<div class="pt-5"></div>

<div class="container pt-5">

<!-- START YOUR CONTENT -->
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<!-- END YOUR CONTENT -->

</div>

<script src="scripts/jquery.js"></script>
<script src="scripts/popper.js"></script>
<script src="scripts/style.js"></script>

</body>
</html>

