<html>
<head>
<title>TSF Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

<div class="topnav">
<a  href="history.php">Transfer history</a>
<a href class="active"="transfer.php">Transfer</a>
<a href="add.php">Add Customer</a>
<a  href="customer.php">View Customers</a>
<a  href="index.php">Home Page</a>
</div>
<div class="bank">
<img src="bank.jpg" width=120 height=120>
</div>

<h1>TSF Bank<h1>

<center>


<font face="verdana">
<fieldset>
<h3>Transaction Form <img src="pic.jpg" height=35px width=35px></h3></font>
<form action="Transfer1.php">
<label name="from">Payer Account number</label>

<?php
$conn=mysqli_connect("127.0.0.1","root","","bank");
$query="select * from customer";
$result=mysqli_query($conn,$query);

?>
<select name="from">
<option>-------------------Select-----------------</option>
<?php
while($row=mysqli_fetch_assoc($result))
{
   echo"<option>$row[accountNum] | $row[name]</option>";
}
?>
</select>
<br>
<label name="to">Payee Account number  </label>
<?php
$conn=mysqli_connect("127.0.0.1","root","","bank");
$query="select * from customer";
$result=mysqli_query($conn,$query);

?>
<select name="to">
<option>-------------------Select-----------------</option>
<?php
while($rows=mysqli_fetch_assoc($result))
{
   echo"<option>$rows[accountNum] | $rows[name]</option>";
}
?>
</select>
<br>
<label name="Amount">Amount  </label>
<input type="text" name="amount"required><br><br>
<tr><th><input type="Submit" value="Send Money" onclick="transfer1.php"></th>
<td><input type="Reset" value="Reset"></td></tr>


</form>
</fieldset>
</center>
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
</body>
</html>

