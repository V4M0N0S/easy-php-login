<?php session_start();	
	if(isset($_POST['Submit'])){  

    /* this is the single user function */
		$logins = array('admin' => 'admin');

    /* IF YOU NEED MULTIUSER SUPPORT, CHANGE LINE 5 WITH LINE 10 | how its works?
    'admin1' => 'admin1' | the first admin1 is the username, the second admin1 is the password */

    /* $logins = array('admin1' => 'admin1','username1' => 'username1','username2' => 'username2'); */

		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';			
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:dashboard");
			exit;
		} else {
			$msg="<span style='color:red'>Check your login credentials!</span>";
		}
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

<div class="pt-5"></div>

<div class="col-lg-2" style="float:none;margin:auto;">

<img class="img-fluid" src="images/login.png"></img>

<form action="" method="post" name="Login_Form">

  <div class="form-group">
    <input name="Username" type="text" class="form-control" placeholder="Your username">
  </div>
  <div class="form-group">
    <input name="Password" type="password" class="form-control" placeholder="Your password">
  </div>
  
  <?php if(isset($msg)){?>
  <div class="btn btn-block btn-secondary text-center"><?php echo $msg;?></div>
  <?php } ?>

  <button name="Submit" type="submit" value="Login" class="btn btn-block btn-secondary">Submit</button>
</form> 

</div>

<script src="scripts/jquery.js"></script>
<script src="scripts/popper.js"></script>
<script src="scripts/style.js"></script>

</body>
</html>