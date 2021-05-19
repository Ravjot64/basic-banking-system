<?php
$n=$_REQUEST['name'];
$e=$_REQUEST['email']; 
$ac=$_REQUEST['acc'];
$ba=$_REQUEST['balance'];

$connection=mysqli_connect("127.0.0.1","root","","bank");
$sqlquery="INSERT INTO customer VALUES ('$n','$e','$ac','$ba')";
$result=mysqli_query($connection,$sqlquery);
if($result>0)
{
echo"<script>alert('Successfully added')</script>";

}
else
{
echo"<script>alert('Error!!!!!')</script>";
}
?>
