<!Doctype html>
<html>
<head>
	<title>Transfer History</title>
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
	<h1>Transfer History</h1>
	<tr>
		<th>Sender</th>
		<th>Beneficiary</th>
		<th>Amount</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bank");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transferhistory";
	$result = $conn-> query($sql);

	if (!empty($result) && $result->num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["fname"] ."</td><td>".  $row["tname"] ."</td><td>" .  $row["cash"] ."</td></tr>";
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