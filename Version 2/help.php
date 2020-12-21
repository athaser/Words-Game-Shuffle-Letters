<?php
//Get Values from form in new.html file
$sid=1;
$score=100;
require('session.php'); 
$m=0;
$h=0;
$c=0;
$h=$row['idw'];

function testfun()
{
	require('session.php'); 
	global $row, $c, $srow,$nrow, $w;


	if($c==1)
		{
			$string = $row['word'];
			print  "<div class = 'newhelp';>".$string[0]."\n</div>";
			echo "<br />\n";    
			$sc = $srow['score']-10;
			$sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";
			if ($conn->query($sqls) === TRUE)
				{
					
				} 
			else
				{
					echo "Error updating record: " . $conn->error;
				}

			exit;
		}

	if($c==2)
		{
			$string = $row['word'];
			print  "<div class = 'newhelp';>".$string[0].$string[1]."\n</div>";
			echo "<br />\n";    
			$sc = $srow['score']-10;
			$sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";
			if ($conn->query($sqls) === TRUE)
				{
					
		} 
			else
				{
					echo "Error updating record: " . $conn->error;
				}
   
			exit;
		}

	if($c==3)
		{
			$string = $row['word'];
			print  "<div class = 'newhelp';>".$string[0].$string[1].$string[2]."\n</div>";
			echo "<br />\n";    
			$sc = $srow['score']-10;
			$sqls = "UPDATE games SET score='$sc' WHERE user_id ='$nid' && sid =(select * from (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )AS T)";
			if ($conn->query($sqls) === TRUE)
				{
					
				} 
			else
				{
					echo "Error updating record: " . $conn->error;
				}

			exit;
		}

	else
		{
			$string = $row['word'];
			print  "<div class = 'newhelp'; >".$string[0].$string[1].$string[2]."\n</div>";
			echo '<div class = "newhelpp"; >Out of Helps</div>';
			exit;
		}
   
}


if (isset($_POST['help']))
	{ 
		global $h;
	///////////////////HHHHEEEEELLLLPPPPPPPPP
		$hresult = mysqli_query($conn,"select * from help WHERE word_id ='$h' && help_id = (SELECT MAX(help_id) FROM help )  " )
					or die("Failed to query database ".mysqli_error($conn));
		$hrow = mysqli_fetch_array($hresult);
		if(empty($hrow['help_id'])){
			$c=1;
		}elseif(isset($hrow['help_id'])){ 
			$c=$hrow['help_id']+1;
		}
		$sqlh = "INSERT INTO help (word_id,help_id) values ('$h','$c')";
		if ($conn->query($sqlh))
		{
			include 'game.php';
		}
		else
		{
			echo "Error: ".$sqlh ."
			". $conn->error;
		}
	testfun(); 

	exit;
	}
else
	{
		global $h;
		$hresult = mysqli_query($conn,"select * from help WHERE word_id ='$h' && help_id = (SELECT MAX(help_id) FROM help )  " )
					or die("Failed to query database ".mysqli_error($conn));
		$hrow = mysqli_fetch_array($hresult);
	}
		
?>
<head>
<link rel="stylesheet" href="css/stylehelp.css">
</head>