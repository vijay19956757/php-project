<?php
$conn=mysqli_connect('localhost','root','');
if($conn)
{
	echo "Connection established";
}
else
{
	echo "Connection Failed";
}
$db=mysqli_select_db($conn,'admin');
if (isset($_POST['submit'])) 
{
	$cat=$_POST['ecat'];
	$scat=$_POST['esubcat'];
	$sdesc=$_POST['edesc'];
	$sql="INSERT INTO `test`(`ecat`, `esubcat`, `edesc`) VALUES ($cat','$scat','$sdesc')";
	$query=mysqli_query($conn,$sql);
	if($query)
    {
      echo "<script> alert('Record Save  !'); </script>";
    }
    else {
      echo "<script> alert('Oops Not Save  !'); </script>";
    }

    mysqli_close($conn);
  }

?>