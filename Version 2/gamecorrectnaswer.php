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
	<link rel="stylesheet" href="css/styledrag.css">
	<link rel="stylesheet" href="css/styletitle.css">
	<link rel="stylesheet" href="css/stylehelpbutton.css">
	<link rel="stylesheet" href="css/stylecheckbutton.css">
	<link rel="stylesheet" href="css/stylehelp.css">
	<link rel="stylesheet" href="./css/stylecorrectanswer.css">
</head>

<body>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="./js/scriptaudiomain.js"></script>
	
	<div id="profile">
		<b id="welcome" class="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout" class="welcome"><a style="position:absolute; right:30px;" href="logout.php">Log Out</a></b>
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
		<div class='popup'>
			<div>Cost: 10 points </div>
			<svg height="50" width="100">
				<path d="M0 50 L40 0 L65 0 Z" />
				Sorry, your browser does not support inline SVG.
			</svg>
		</div>
		</form>
	</div>
	
	<!-- partial:index.partial.html -->
<div id="app">
  <button class="reload" type="button" @click="reload()" :class="[bg(), pattern()]"><i class="fas fa-redo-alt"></i></button>
  <div class="quote">
    <template v-for="(word, index) in words">
      <div class="word" :key="`words_${index}`" :class="word">
        <div class="letter" v-for="(letter, index) in word" :key="`letter_${index}`" :class="[rotate(), bg(), pattern()]" :data-letter="letter">{{letter}}</div><span class="space" v-if="index !== words.length - 1">&nbsp;</span>
      </div>
    </template>
  </div>
</div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/vue'></script>
  <script src='https://kit.fontawesome.com/72a3efa272.js'></script>
  <script  src="./js/scriptcorrectanswer.js"></script>
<?php 
				header( "refresh:1;url=./game.php" );
?>
	
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