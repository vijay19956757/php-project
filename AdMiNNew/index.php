<?php
session_start();
if (!isset($_SESSION['username'])) {
	# code...
	header("location:login.php");
}
else{


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edge Programmers</title>
</head>
<body>
	<h1>Welcome to Developers Dashboard</h1>
</body>
</html>
<?php }?>