<?php
include("include.inc");
$uid=$_POST['uid'];
$startDate=$_POST['date1'];
$endDate=$_POST['date2'];
$sql = "SELECT date,quantity,rate FROM service where uid='$uid' AND start >= '$startDate'  end <= '$endDate'";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
$outp = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$outp[] = $rs;
}
echo json_encode($outp);
$conn->close();
?>
