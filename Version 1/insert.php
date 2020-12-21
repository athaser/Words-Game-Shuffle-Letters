<?php
require('session.php');
$add = filter_input(INPUT_POST, 'add');
$category = filter_input(INPUT_POST, 'category');

 if (!empty($add)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "scrable";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
	 $sql_u = "SELECT * FROM words WHERE word='$add'";
  	$res_u = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res_u) > 0) {
  	  echo "Sorry... word already in database"; 	
	  }
	  else{
$sql = "INSERT INTO words (word,category)
values ('$add','$category')";
if ($conn->query($sql)){
echo "New word is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Word</title>
<link rel="stylesheet" href="css/style2.css">

</head>
<body>
<div class="form">
<p>
| <a href="admin.php">View Records</a> 
| <a href="logout.php">Logout</a></p></br>
<div>
<h1>Insert New Word</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input style="width: 100%;   padding: 12px 20px;   margin: 8px 0;   display: inline-block;   border: 1px solid #ccc;   border-radius: 4px;
  box-sizing: border-box;"

 type="text" name="add" placeholder="New Word" required /></p>
<p><input style="width: 100%;   padding: 12px 20px;   margin: 8px 0;   display: inline-block;   border: 1px solid #ccc;   border-radius: 4px;
  box-sizing: border-box;"
 type="text" name="category" placeholder="Category" required /></p>
<p><input style="  width: 100%;   background-color: #4CAF50;   color: white;   padding: 14px 20px;   margin: 8px 0;
  border: none;   border-radius: 4px;   cursor: pointer;"
 name="submit" type="submit" value="Submit" /></p>
</form>
</div>
</div>
</body>
</html>