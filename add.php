<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="topnav">
<a href="history.php">Transfer history</a>
<a href="transfer.php">Transfer</a>
<a class="active" href="add.php">Add Customer</a>
<a href="customer.php">View Customers</a>
<a  href="index.php">Home Page</a>
</div>

<div class="bank">
<img src="bank.jpg" width=120 height=120>
</div>

<h1>TSF Bank<h1>

<center>
<font face="verdana" color="#17202A ">
<font face="verdana">
<fieldset>
<h3>Fill Customer details<h3></font>
<form action="addcustomer.php">
<label>Customer name: </label>
<input type="text" name="name" required><br><br>
<label>Email:</label>
<input type="text" name="email" required><br><br>
<label> Account no.:</label>
<input type="text" name="acc" required><br><br>
<label>Balance:</label>
<input type="text" name="balance" required><br><br>
<input type="Submit" value="submit" onclick="addcustomer.php">
<input type="Reset" value="Reset">

</form>
</fieldset>


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