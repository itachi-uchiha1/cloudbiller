<?php
include("include.inc");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST ['password'];
$address=$_POST ['address'];
$city=$_POST ['city'];
$sql="insert into user (fname,lname,email,username,password,mobile,memberFrom,address,city) values ('$fname','$lname','$email','$username','$password','$mobile',DATE(NOW()),'$address','$city')";

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
