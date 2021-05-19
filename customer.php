<html>
<head>
<title>TSF Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mystyle.css">
</head>
<body class="customer">


<div class="topnav">
<a href="history.php">Transfer history</a>
<a href="transfer.php">Transfer</a>
<a href="add.php">Add Customer</a>
<a class="active" href="customer.php">View Customers</a>
<a  href="index.php">Home Page</a>
</div>
<div class="bank">
<img src="bank.jpg" width=120 height=120>
</div>

<h1>TSF Bank<h1>

<center>
<font face="verdana">
<caption>Customers <img src="customers2.jpg" height=30 width=30 margin=5px></caption></font><br><br>

<div style="overflow-x:auto;">
<table border=1>
<tr><th>Name</th><th>Email</th><th>Account Number</th><th>Balance</th></tr>
<?php
$con=mysqli_connect("127.0.0.1","root","","bank");
$sql="Select * From Customer";
$res=mysqli_query($con,$sql);



while($row=mysqli_fetch_array($res))
{
  echo"<tr><td>". $row['name']."</td><td>".$row['email']."</td><td>".$row['accountNum']."</td><td>".$row['balance']."</td></tr>";
}
?>
</table>
</div>
<br>
<div class="footer">
<font face="courier new" size="5px">
Catch us on
</font><br>
<a href="https://instagram.com/thesparksfoundation.info" target=blank>
<img src="instalogo.png" height=25 width=25>
</a>
<a href="https://www.linkedin.com/company/the-sparks-foundation/" target=blank>
<img src="lilogo.png" height=25 width=35>
</a>
<a href="https://twitter.com/tsfsingapore" target=blank>
<img src="twitter logo.png" height=25 width=25>
</a>
<a href="https://www.facebook.com/thesparksfoundation.info" target=blank>
<img src="fblogo.png" height=25 width=35>
</a><br>
<font size="3" face="arial" color="yellow">Project made under The Sparks Foundation By Ravjot Singh</font>
</div>
</center>


</body>
</html>
