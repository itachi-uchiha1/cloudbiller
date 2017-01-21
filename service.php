<?php
include("include.inc");
$uid=$_POST['uid'];
$pid=$_POST['pid'];
$date=$_POST['date'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];

$mysql_qry1="select uid from service where date like DATE(NOW()) and uid=$uid ";
$result= mysqli_query($conn,$mysql_qry1);

if(mysqli_num_rows($result)>0)
{
echo "201";
}
else{
$mysql_qry="insert into service (uid,pid,date,rate,quantity) values ($uid,$pid,STR_TO_DATE('$date','%d-%m-%y'),$rate,$quantity) ";
if($conn->query($mysql_qry) === TRUE)
{
echo "200";
}
else
{
echo "Error: ". $mysql_qry . "<br>" . $conn->error;
//echo "201";
}
}
$conn->close();

?>
