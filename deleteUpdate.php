<?php
include("include.inc");
$uid = $_POST['uid'];
$id = $_POST['id'];
$sql="DELETE FROM user WHERE uid=$uid AND id=$id";
$conn->query('SET CHARACTER SET utf8');
$result = $conn->query($sql);
if($result) {
echo "200";	
}
else
{
echo "201";
}
$conn->close();
?>
