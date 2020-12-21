<?php
require('../session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Words</title>
<link rel="stylesheet" href="../css/styleadmin.css">

</head>
<body>
<div class="form">
<p><a href="admin.php">Words</a> 
| <a href="insert.php">Insert New Word</a> 
| <a href="../logout.php">Logout</a></p>
<h2>Scrable Users</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Word.No</strong></th>
<th><strong>Word</strong></th>
<th><strong>Category</strong></th>
</tr>
</thead>
<tbody>

<?php

$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["id"]; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["password"]; ?></td>

<td align="center">
<a style="color:red;" href="editusers.php?id=<?php echo $nrow["id"]; ?>">Edit</a>
</td>
<td align="center">
<a style="color:red;" href="delete.php?id=<?php echo $nrow["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>

</body>
</html>