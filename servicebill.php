<?php
include("include.inc");
$uid=$_POST["uid"];
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$mysql_qry="select uid,pid,date,quantity,rate from service where date between STR_TO_DATE('$date1','%d-%m-%Y') and STR_TO_DATE('$date2','%d-%m-%Y') and uid=$uid";
//$mysql_qry="select uid,pid,date,quantity,rate from service where uid=$uid and date like DATE(NOW()) ";
$conn->query('SET CHARACTER SET utf8');
$result=$conn->query($mysql_qry);
$outp = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)){
$outp[] =$rs;
}
if($outp)
{
echo json_encode (array ('pd'=>$outp)); 
}
else
{
echo '201';
}
$conn->close();
?>
