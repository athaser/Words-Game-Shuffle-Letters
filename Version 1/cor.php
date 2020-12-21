<html>
<body>

<audio id="myAudiocorrect">
  <source src="./audio/correct.mp3" type="audio/mpeg">
</audio>

<audio id="myAudioerror">
  <source src="./audio/error.mp3" type="audio/mpeg">
</audio>

<?php


//Get Values from form in new.html file
$sid=1;
$score=100;

require './session.php';
$word =  ($_POST['word']);

if ($row['word'] == $word )
 {	  
   $sid= $srow['sid'];
   $score= $srow['score'];
   $sid++;
   $score=$score+100;
   if (mysqli_connect_error())
	{
		die('Connect Error ('. mysqli_connect_errno() .') '
		.mysqli_connect_error());
	}
   else
	{
		$sql = "INSERT INTO games (sid, score, user_id) values ('$sid','$score','$nid')";
		if ($conn->query($sql))
			{
				echo "Well Done !!!";
				 echo "<script>
						var x = document.getElementById('myAudiocorrect'); 
				 
						function playAudio()
						{
							x.play();
						}
						playAudio()
					</script>";
				header( "refresh:1;url=./game.php" );
				$sqls = "DELETE FROM help where hid>1" ;
				if ($conn->query($sqls) === TRUE) 
					{
						echo "";
					}
				else 
					{
						echo "Error updating record: " . $conn->error;
					}

			}

		else
			{
				echo "Error: ". $sql ."
				". $link->error;
			}
		$conn->close();

	}
}

else
	 echo "<script>
				var x = document.getElementById('myAudioerror'); 
				 
				function playAudio()
					{
						x.play();
					}
				playAudio()
			</script>";

	{	require './session.php';
		if (isset($hrow['help_id'])){
			header( "refresh:1;url=./help.php" );
		} else { 
			header( "refresh:1;url=./game.php" );
		}
	}
?>
</body>
</html>
