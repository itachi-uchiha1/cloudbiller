<?php
include("include.inc");
$uid=$_POST['uid'];
$sql = "SELECT fname,lname,address,city,locality,pincode,uid,rate,quantity,id,email,mobile FROM user where uid='$uid'";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
$outp = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$outp[] = $rs;
}
echo json_encode (array ('res'=>$outp)); 
$conn->close();
?>
