<?php
$conn = mysqli_connect("localhost", "root", "", "bank");
if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}
$sql = "SELECT name, email,amount FROM banking";
error_reporting(0);
$result = mysqli_query($conn,"SELECT *  FROM banking");
?>

<!DOCTYPE html>
<html>
<head>
	<title>View customer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="final.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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
<div class ='form'> 
	<h1 align ='center'> View Customer</h1>
</div> 
<div class='main'>
<form action="onecustomer.php" method="GET" class = "form" >
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value ="">Customer Name</option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

        </select>
		<input type="submit" id= submit name="submit" value=" View">	
	</form>
</div>

</body>
</html>

