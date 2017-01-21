
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$mysql_host = "localhost";
//$mysql_database = "APPCMDA";
//$mysql_user = "appcmda";
//$mysql_password = "@ppCMDA";


//$mysql_database = "cmda";
//$mysql_user = "root";
//$mysql_password = "root";

$mysql_database = "hr";
$mysql_user = "root";
$mysql_password = "root";
// Create connection
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password,$mysql_database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
