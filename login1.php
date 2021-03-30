<?php
$uname = isset($_GET['uname']) ? $_GET['uname'] : '';
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$servername = "localhost";
$username="root";
$password="";
$dbName="test";
$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * FROM login_details WHERE login_details.username = '$uname' AND login_details.password= '$pass'";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);

if(isset($check)){
	echo 'success';
}else{
	echo 'failure';
}
?>
