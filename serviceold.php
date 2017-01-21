<?php
include("include.inc");
$date=$_POST["date1"];
$mysql_qry="select uid,pid,date,quantity,rate from service where date like STR_TO_DATE('$date','%d-%m-%y') ";


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
