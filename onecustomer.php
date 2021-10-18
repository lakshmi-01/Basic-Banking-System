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
    <h1>Customer Details</h1>
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


            if($_GET['submit'])
            {
            $u1=$_GET['u1'];
 
    $sql = "SELECT * FROM banking WHERE name='$u1'";
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
}
    $conn-> close();
    ?>
</table>

</body>
</html>