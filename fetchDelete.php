<?php
include("include.inc");
//$id=$_POST['id'];
$id='5';
$sql = "SELECT fname,lname,address,city,uid FROM user where id='$id'";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
$outp = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$outp[] = $rs;
}
echo json_encode($outp);
$conn->close();
?>
