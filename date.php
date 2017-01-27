<?php
include("include.inc");
$sql = "SELECT CURDATE()";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
$outp = array();
$rus = $result->fetch_row();

while($rs = $result->fetch_assoc()) {
	$res=$rs;
	$outp[] = $rs;
}
//echo json_encode (array ('res'=>$outp)); 
echo $rus[0];
$conn->close();
?>
