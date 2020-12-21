<?php
require('../session.php');
$id=intval($_REQUEST['id']);
$query = "DELETE FROM words WHERE idw='$id'"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: admin.php"); 
?>