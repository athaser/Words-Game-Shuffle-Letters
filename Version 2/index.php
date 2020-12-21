<?php
include('process.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header( "refresh:0;url=./game.php" );
}
?> 

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Scrable</title>
  <meta charset="UTF-8">
  <title>Words</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <link rel="stylesheet" href="./css/styleregister.css">
</head>

<body>

<div class="wrapper">
  <div class="login is-active">
	<form class="form" method="post" action="./process.php">
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="text" name="username" placeholder="Username"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input id="password" name="password" type="password" placeholder=" Password"/>
    </div>
    <button  name="submit" type="submit" id="login-button" class="btn-login">login</button>
	</form>
  </div>
  
  <div class="register down">
  	<form class="form" method="post" action="./register.php">
    <div class="form-element">
      <span><i class="fa fa-user"></i></span><input type="text" name="username_reg" placeholder="Username"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-envelope"></i></span><input type="text" name="email" id="email" placeholder="Your Email Address"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input id="password_1" name="password_1" type="password" placeholder="Password"/>
    </div>
    <div class="form-element">
      <span><i class="fa fa-lock"></i></span><input id="password_2" name="password_2" type="password" placeholder="Re-Enter Password"/>
    </div>
    <button name="register" type="register" class="btn-register" id="register">register</button>
	</form>
  </div>
  
  <div class="login-view-toggle">
    <div class="sign-up-toggle is-active">Don't have an account? <a href="#">Sign Up</a></div>
    <div class="login-toggle">Already have an account? <a href="#">Login</a></div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./js/scriptregister.js"></script>
</body>

</html>
