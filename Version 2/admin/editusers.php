<?php
require('../session.php');
$id=$_REQUEST['id'];
$query = "SELECT * from users where id='$id'"; 
$eresult = mysqli_query($conn, $query) or die ( mysqli_error());
$erow = mysqli_fetch_assoc($eresult);

?>

<html>
<head>
<meta charset="utf-8">
<title>Update User</title>
<link rel="stylesheet" href="../css/styleadmin.css">

</head>
<body>



<div class="form">
<p> 
| <a href="admin.php">Words</a> 
| <a href="insert.php">Insert New Word</a> 
| <a href="../logout.php">Logout</a></p></br>
<h1>Update User</h1>
</div>


<div>
<form  name="form" method="post" action=""> 
<p><input style="width: 100%;   padding: 12px 20px;   margin: 8px 0;   display: inline-block;   border: 1px solid #ccc;   border-radius: 4px;
  box-sizing: border-box;"
 type="text" name="username" placeholder="Enter Username" 
required value="<?php echo $erow['username'];?>" /></p>
<p><input style="width: 100%;   padding: 12px 20px;   margin: 8px 0;   display: inline-block;   border: 1px solid #ccc;   border-radius: 4px;
  box-sizing: border-box;"
 type="text" name="password" placeholder="Enter Password" 
required value="<?php echo $erow['password'];?>" /></p>
<p><input style="  width: 100%;   background-color: #4CAF50;   color: white;   padding: 14px 20px;   margin: 8px 0;
  border: none;   border-radius: 4px;   cursor: pointer;"
 name="submit" type="submit" value="Update" /></p>
</form>
</div>
</body>
</html>

<?php
require('../session.php');

		$username = filter_input(INPUT_POST, 'username');
		$password = filter_input(INPUT_POST, 'password');
        $id=$_REQUEST['id'];
		
if (isset($_POST['submit'])) { 
	if (empty($_POST['username']) || empty($_POST['password'])) { 
		$error = "Delete If you want Word or Category"; 
	} 
	else{ 
 
$sql = "UPDATE users SET username='$username', password ='$password' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
   $status = "Record Updated Successfully. </br></br>";
//////<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;   position: absolute;   top: 450px;   right: 400px;   width: 300px;   height: 70px;   border: 3px solid #73AD21;
">'.$status.'</p>';
} else {
    echo "Error updating record: " . $conn->error;
}	
$conn->close();
}}
?>