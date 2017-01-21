<?php
include("include.inc");
$name=$_POST['name'];
$vid=$_POST['vid'];
$mysql_qry="insert into product (vid,pid,name) values ($vid,0,'$name') ";
if($conn->query($mysql_qry) === TRUE)
{
echo "200";
}
else
{
//echo "Error: ". $mysql_qry . "<br>" . $conn->error;
echo "201";
}
$conn->close();

?>
