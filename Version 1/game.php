<?php
include('session.php'); 
if(!isset($_SESSION['login_user'])){ 
  header("location: indexses.php"); // Redirecting To Home Page 
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
	<link rel="stylesheet" href="css/stylepophelp.css">
	<link rel="stylesheet" href="css/styledrag.css">
	<link rel="stylesheet" href="css/styletitle.css">
	<link rel="stylesheet" href="css/stylehelpbutton.css">
	<link rel="stylesheet" href="css/stylecheckbutton.css">
	<link rel="stylesheet" href="css/stylehelp.css">
</head>

<body>
	<audio id="myAudiopieces">
		<source src="./audio/pieces.mp3" type="audio/mpeg">
	</audio>

	<div class="speaker"></div>

	<audio id="player">
		<source src="./audio/main.mp3" type="audio/mpeg">
	</audio>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="./js/scriptaudiomain.js"></script>
	
	<div id="profile">
		<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout"><a style="position:absolute; right:30px;" href="logout.php">Log Out</a></b>
	</div>
 
	<div id = "">
		<h3 contenteditable data-heading="WORDS">WORDS</h3>
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
		<button class="pulse-button" name="test" type="submit"  style="background-image: url('./audio/help2.png'); background-repeat: no-repeat; background-position: center;"></button>
		</form>
	</div>

	<div class="cart">
		<div class="popup">
		<div class="row header">
			<span>Help (3 for each word)</span>
			<span>Cost</span>
		</div>
		<div class="row items">
			<span>Each </span>
			<span>10 Points</span>
		</div>
		</div>
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