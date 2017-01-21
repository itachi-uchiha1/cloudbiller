<?php
include("include.inc");
$uid=$_POST['uid'];

$mysql_qry="insert into service(pid,date,uid,rate,quantity) select 2,DATE(NOW()),id,rate,quantity from user where uid=$uid and id not in(select uid from service where date like DATE(NOW())) ";

$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($mysql_qry);
if($conn->affected_rows>0)
{
echo "200";
}
else
{
echo "201";
}

$conn->close();

?>
