<?php
$a=$_REQUEST['from'];
$b=$_REQUEST['to']; 
$c=$_REQUEST['amount'];

$con=mysqli_connect("127.0.0.1","root","","bank");
$query="INSERT INTO `transaction`(`From`, `To`, `Amount`) VALUES ('$a','$b','$c')";
$res=mysqli_query($con,$query);
$query1="UPDATE 'customer' SET 
balance=balance+$c WHERE accountNum=$b";
$ress=mysqli_query($con,$query1);
if($res>0)
{
echo"<script>alert('Successfully Sent')</script>";

}
else
{
echo"<script>alert('Error!!!!!')</script>";
}
?>
