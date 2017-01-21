<?php
include("include.inc");
$user_name=$_POST['user'];
$user_pass=$_POST['pass'];
$sql ="select id,fname,lname,address,city,mobile,email from user where username like '$user_name' and password like '$user_pass'";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
$outp = array();
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	$outp[] = $rs;
}
echo json_encode (array ('venres'=>$outp)); 
$conn->close();
?>
