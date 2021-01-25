<?php
$conn=mysqli_connect('localhost','root','','admin');
if($conn)
{
  echo "Connection established";
}
else
{
  echo "Connection Failed";
}
if (isset($_POST['submit'])) {
  $category=$_POST['gname'];
    # Image Code here
  $image = addslashes($_FILES['eimg']['tmp_name']);
  $name = addslashes($_FILES['eimg']['tmp_name']);
  $image = file_get_contents($image);
  $image = base64_encode($image);
  $sql="INSERT INTO `upcoming`(`gname`, `eimg`) VALUES ('$category','$image')";
  $query=mysqli_query($conn,$sql);
  if($query)
  {
    echo "<script> alert('Record Save  !'); </script>";
    header('location:upcomingtutorial.php');
  }
  else {
    echo "<script> alert('Oops Not Save  !'); </script>";
    header('location:login.php');
  }

  mysqli_close($conn);
}

else
{
  echo "<script> location.href='login.php' </script>";
}

?>
