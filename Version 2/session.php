<?php
// mysqli_connect() function opens a new connection to the MySQL server. 
$conn = mysqli_connect("localhost", "root", "", "scrable"); 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
////session_start();// Starting Session 
// Storing Session 
$user_check = $_SESSION['login_user']; 





// SQL Query To Fetch Complete Information Of User 
$nresult = mysqli_query($conn,"SELECT * from users where username = '$user_check'")
   or die("Failed to query database ".mysqli_error($con));
$nrow = mysqli_fetch_array($nresult); 
$login_session = $nrow['username'];
$login_id = $nrow ['id'];
$nid = $nrow ['id'];




////////////////////////////SSSSSCCCCCCOOOOOORRRRRREEEEEEE
$sresult = mysqli_query($conn,"select * from games WHERE user_id ='$nid' && sid = (SELECT MAX(sid) FROM games WHERE user_id ='$nid' )  " )
or die("Failed to query database ".mysqli_error($conn));
   $srow = mysqli_fetch_array($sresult);
   $s= $srow['sid'];

//////////////WWWWOOOOORRRRDDDDDD
$result = mysqli_query($conn,"select * from words WHERE idw = '$s'")
////$result = mysqli_query($link,"select * from words ORDER BY idw")
or die("Failed to query database ".mysqli_error($conn));
   $row = mysqli_fetch_array($result);
?>