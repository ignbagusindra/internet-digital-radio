<?php

session_start();

if (isset($_SESSION['userSession'])!="") {

	header("Location: home.php");

}

require_once 'dbconnect.php';



if(isset($_POST['btn-signup'])) {

	

	$uname = strip_tags($_POST['username']);

	$email = strip_tags($_POST['email']);

	$upass = strip_tags($_POST['password']);

	

	$uname = $con->real_escape_string($uname);

	$email = $con->real_escape_string($email);

	$upass = $con->real_escape_string($upass);

	

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

	

	$check_email = $con->query("SELECT email FROM tbl_users WHERE email='$email'");

	$count=$check_email->num_rows;

	

	if ($count==0) {

		

		$query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";



		if ($con->query($query)) {

			$msg = "<div class='alert alert-success'>

						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !

					</div>";

		}else {

			$msg = "<div class='alert alert-danger'>

						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !

					</div>";

		}

		

	} else {

		

		

		$msg = "<div class='alert alert-danger'>

					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !

				</div>";

			

	}

	

	$con->close();

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Login & Registration System</title>

<!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">




</head>

<body>



<div class="signin-form">



	<div class="container">

     

        

       <form class="form-signin" method="post" id="register-form">

      

        <h2 class="form-signin-heading">Sign Up</h2><hr />

        

        <?php

		if (isset($msg)) {

			echo $msg;

		}

		?>

          

        <div class="form-group">

        <input type="text" class="form-control" placeholder="Username" name="username" required  />

        </div>

        

        <div class="form-group">

        <input type="email" class="form-control" placeholder="Email address" name="email" required  />

        <span id="check-e"></span>

        </div>

        

        <div class="form-group">

        <input type="password" class="form-control" placeholder="Password" name="password" required  />

        </div>

        

     	<hr />

        

        <div class="form-group">

            <button type="submit" class="btn btn-default" name="btn-signup">

    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account

			</button> 

            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>

        </div> 

      

      </form>



    </div>

    

</div>



</body>

</html>