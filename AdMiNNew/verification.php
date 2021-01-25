<?php
session_start();
$conn = mysqli_connect('localhost','root','');
if ($conn) {
	echo "connection successfully";
}
else{
	echo "connection failed";
}
$db=mysqli_select_db($conn,'katayani');
if(isset($_POST['submit'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$sql="select * from admin where user = '$username'  and pass ='$password'" ;
	$query= mysqli_query($conn,$sql);
	$row=mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user']=$username;
			header('location:index1.php');
		}
		else{
			echo "login failed";
			header('location:login.php');
		}
		
	
}
?>