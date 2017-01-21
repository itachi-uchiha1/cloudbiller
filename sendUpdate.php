<?php
include("include.inc");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$address = $_POST['address'];
$uid = $_POST['uid'];
$id = $_POST['id'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$sql="UPDATE user SET fname='$fname',lname='$lname',city='$city',address='$address',mobile='$mobile',email='$email' WHERE uid=$uid AND id=$id";
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
