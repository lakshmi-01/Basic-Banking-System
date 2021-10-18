<!DOCTYPE html>
<html>
<head>
  <title>Basic Banking Website</title>
  <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <style type="text/css">
      .button1 {
        background-color: #302457;
       color: #C4BAE3;
       border: 6px solid #DEC9F0;
       padding: 11px 24px;
       cursor: pointer; 
       width: 50%; 
       display: block; 
       position: flex;
       margin-left:580px;
       font-size: 15px;
       margin-top: 45px;
}

.button1:not(:last-child) {
  border-bottom: none; }
  .btn-group a{
    text-decoration: none;
  }

.button1:hover {
  background-color: #DEC9F0;
   color: #302457;

}
    </style>
</head>
<body>
<div class="top">
  <a class="active" href="home.php">Home</a>
  <div class="top-right">
  <a class="active" href="transferdet.php">Transaction History</a>
  <a class="active" href="viewusers.php">View Users</a>
   <a class="active" href="one.php">User Detail</a>
  </div>
</div>

 
<h1>BASIC BANKING SYSTEM</h1>
        <div class="btn-group">
            <a href="viewusers.php"> <button class="button1" >Our Customers</button></a>
            <a href="transferdet.php"><button class="button1" >Transaction History</button></a>
            <a href="transfer.php"><button class="button1" >Transfer Money</button></a>
  </div>
  <div class="footer">
    <p>&copy 2021. Made by <b>Vijayalakshmi A</b></p>
    
     <a class="btn" href="https://github.com/lakshmi-01">
        <i class="fab fa-github"></i>
     </a>
     <a class="btn" href="https://www.linkedin.com/in/vijayalakshmi-a-719174199/">
       <i class="fab fa-linkedin"></i>
     </a>
  </div>
</body>
</html>