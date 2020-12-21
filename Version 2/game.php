<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: index.php"); // Redirecting To Home Page 
}
?>


<!DOCTYPE html>
<html lang="en" >

<head>
	<meta charset="UTF-8">
	<title>Words</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleaudiomain.css">
	<link rel="stylesheet" href="css/styledrag.css">
	<link rel="stylesheet" href="css/styletitle.css">
	<link rel="stylesheet" href="css/stylehelpbutton.css">
	<link rel="stylesheet" href="css/stylecheckbutton.css">
	<link rel="stylesheet" href="css/stylehelp.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/stylenavbar.css">

</head>

<body>

<div class="container">
<nav class="with-dropdown navbar navbar-static-top navbar-default navbar-semi-transparent navbar-highlight-factory-yellow" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img class="navbar-user-img img-circle" src="https://graph.facebook.com/66200111/picture?width=64&height=64">
          </a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="#">Account</a></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
      <a class="navbar-brand" href="#">
        <span class="navbar-logo">Words</span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">What is Words</a></li>
        <li><a href="#">Ranks</a></li>
        <li class="active"><a href="#">Help</a></li>
        <li><a href="#">Download</a></li>
        <li role="separator" class="divider hidden-xs hidden-sm"></li>
        <li class="alternate hidden-xs hidden-sm"><a href="#">Upgrade</a></li>
        <li class="dropdown alternate hidden-xs hidden-sm">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img class="navbar-user-img img-circle" src="https://graph.facebook.com/66200111/picture?width=64&height=64"> <i><?php echo $login_session; ?></i>
            <svg class="svg-chevron-down" viewBox="0 0 1024 1024">
              <path class="path1" d="M476.455 806.696l-381.164-381.164q-14.621-14.621-14.621-35.293t14.621-34.789 35.293-14.117 34.789 14.117l342.846 343.35 349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789l-381.164 381.164q-19.159 19.159-38.318 19.159t-31.764-12.605z"></path>
            </svg>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" role="menu">
            <li><a href="#">Account</a></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
	<audio id="myAudiopieces">
		<source src="./audio/pieces.mp3" type="audio/mpeg">
	</audio>

	<div class="speaker"></div>

	<audio id="player">
		<source src="./audio/main.mp3" type="audio/mpeg">
	</audio>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="./js/scriptaudiomain.js"></script>
 
	<div id = "">
		<h2 contenteditable data-heading="WORDS">WORDS</h2>
		<script  src="./titlescript.js"></script>
	</div>

	<div class="score-board">
		<label name='score' style="font-size:65px; color:#5a99d4; ">score</label>
		<span id="score"></span>
	  		<?php
				require 'session.php'; 
				$w=$srow['score']-100;
				echo str_shuffle ("").$w;
			?>
	</div>

	<div class = "containerhelp">
		<form method="post" action="./help.php">
		<button class="pulse-button" name="help" type="submit"  style="background-image: url('./audio/help2.png'); background-repeat: no-repeat; background-position: center;"></button>
		<div class='popup'>
			<div>Cost: 10 points </div>
			<svg height="50" width="100">
				<path d="M0 50 L40 0 L65 0 Z" />
				Sorry, your browser does not support inline SVG.
			</svg>
		</div>
		</form>
	</div>
	
	<h1>
		<br/>
		<form name="myform" id="myform" method="post" action="cor.php">
			<div id="txtHint-wrapper"></div>
			<script  src="js/indexdragajax.js"></script>
			<button class="bubbly-button" onclick="check()" name="word" id="word" type="submit" value="">CHECK</button>
			<script  src="./js/checkbutton.js"></script>
		</form>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
		<script type="text/javascript">
			showUser();
		</script>
	</h1>
  		
	<ul class="bg-bubbles">
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	</ul>
    </div> 
</body>
</html>