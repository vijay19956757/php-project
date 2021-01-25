<?php
$conn=mysqli_connect('localhost','root','','uscreen');
if($conn)
{
  echo "Connection established";
}
else
{
  echo "Connection Failed";
}
if (isset($_POST['submit'])) {
  // $category=$_POST['ecat'];
  // $subcategory=$_POST['esubcat'];
  // $Describtion=$_POST['edesc'];
    # Image Code here
  $image = addslashes($_FILES['eimg']['tmp_name']);
  $name = addslashes($_FILES['eimg']['tmp_name']);
  $image = file_get_contents($image);
  $image = base64_encode($image);

  $sql="INSERT INTO `trailor`(`eimg`) VALUES ('$image')";
  $query=mysqli_query($conn,$sql);
  if($query)
  {
    echo "<script> alert('Record Save  !'); </script>";
    header('location:gallery.php');
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
