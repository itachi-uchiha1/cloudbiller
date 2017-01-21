<?php
include("include.inc");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$rate=$_POST['rate'];
$quantity=$_POST['quantity'];
$locality=$_POST['locality'];
$pincode=$_POST['pincode'];
$uid=$_POST['uid'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$sql="insert into user (uid,fname,lname,address,city,pincode,locality,rate,quantity,mobile,email,memberFrom) values ($uid,'$fname','$lname','$address','$city',$pincode,'$locality','$rate','$quantity','$mobile','$email',DATE(NOW()))";
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
