<?php
session_start();
$errors = array(); 

// Create connection
$db = mysqli_connect("localhost", "root", "", "scrable");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = $_POST['username_reg'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user['username'] === $username) {
		echo "Username already exists";
		header( "refresh:2;url=index.php" );	
    } 
	else {
		$resultid = mysqli_query($db,"select * from users WHERE id =(SELECT MAX(id) FROM users)  " )
		or die("Failed to query database ".mysqli_error($db));
		$rowid = mysqli_fetch_array($resultid);
		$s= $rowid['id'];
		echo $s;
		$newid= $s+1;
		///$password = md5($password_1);//encrypt the password before saving in the database
		$sql = "INSERT INTO users (id,username,password,email) values ('$newid','$username','$password_1', '$email')";
		if ($db->query($sql) === TRUE) {
				$sqlsc = "INSERT INTO games (sid,user_id,score) values ('1','$newid','100')";
					if ($db->query($sqlsc) === TRUE) { echo "papa";}
					else{echo "papoo";}
				echo "Success, Plese Login";
				header( "refresh:2;url=index.php" );
				

    
			} else {
			echo "Error: " . $sql . "<br>" . $db->error;
			}
	}
	$db->close();	
  }