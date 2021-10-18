<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="homestyle.css">
</head>
<body>
	<div class="top">
  <a class="active" href="home.php">Home</a>
  <div class="top-right">
  <a class="active" href="transferdet.php">Transfer History</a>
  <a class="active" href="viewusers.php">View Users</a>
   <a class="active" href="one.php">User Detail</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Details  of  Customers</h1>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Amount</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, amount FROM banking";
	$result = $conn-> query($sql);
if (!empty($result) && $result->num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["amount"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>

</body>
</html>