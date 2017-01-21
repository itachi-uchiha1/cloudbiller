<?php
include("include.inc");
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$date=$_POST['date'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];

$sql="UPDATE service set quantity=$quantity where uid=$uid and date like STR_TO_DATE('$date','%d-%m-%y')";

$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);

if($result)
{ 
echo "200";	
}
else
{
echo "201";
}
$conn->close();

?>
